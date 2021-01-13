<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessCodes;
use AppBundle\Entity\Characters;
use AppBundle\Entity\CharacterSkills;
use AppBundle\Entity\Gear;
use AppBundle\Entity\Items;
use AppBundle\Entity\Stats;
use AppBundle\Entity\Weapons;
use AppBundle\Services\Responder;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/")
     * @return Response|null
     */
    public function indexAction(): ?Response
    {
        $em = $this->getDoctrine()->getManager();
        $classes = $em->getRepository('AppBundle:Classes')->findAll();
        $classes_skills = array();

        foreach ($classes as $class) {
            $classes_skills[$class->getId()] = $class->getSkills();
        }

        return $this->render(
            '@App/creator.twig', [
                'classes_skills' => $classes_skills,
                'races' => $em->getRepository('AppBundle:Races')->findAll(),
                'classes' => $classes,
                'alignments' => $em->getRepository('AppBundle:Alignments')->findAll(),
                'deities' => $em->getRepository('AppBundle:Deities')->findAll(),
                'skills' => $em->getRepository('AppBundle:Skills')->findAll(),
            ]
        );
    }

    /**
     * @Route("/authenticate-bot")
     * @param Request $request
     * @return Response
     */
    public function authenticateBot(Request $request): Response
    {
        $token = $request->request->get('secret');
        $checkToken = $this->getParameter('secret');

        if ($token !== $checkToken) {
            return Responder::generateResponse(array($token), 401);
        }

        $em = $this->getDoctrine()->getManager();
        $code = self::randomPassword();
        $accessCode = new AccessCodes();
        $accessCode->setCode($code);
        $exp = new \DateTime('now +24 hours');
        $accessCode->setExpirationDatetime($exp);
        $em->persist($accessCode);
        $em->flush();

        return Responder::generateResponse(array('accessCode' => $code));
    }

    /**
     * @Route("/character-submitted", name="characterSubmitted_url")
     * @param Request $request
     * @return Response
     */
    public function characterSubmitted(Request $request): Response
    {
        $parameters = $request->request->all();
//        $accessCode = $parameters['access_code'];
//
//        $em = $this->getDoctrine()->getManager();
//
//        if (count($em->getRepository('AppBundle:AccessCodes')->findOneBy(array('code' => $accessCode))) === 0) {
//            return Responder::generateError('Your code is invalid');
//        }

        $result = self::saveCharacter($parameters);

        if (is_numeric($result)) {
            return Responder::generateResponse(array('data' => self::generateCharacterJson($result)));
        }
        else {
            return Responder::generateError($result, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function randomPassword(): string
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 64; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    private function saveCharacter($parameters): string
    {
        $em = $this->getDoctrine()->getManager();

        try {
            $characterProps = $parameters['character'];

            $character = new Characters();
            $character->setName($characterProps['name']);
            $character->setPlayer($characterProps['player']);
            $character->setRace($em->getRepository('AppBundle:Races')->find($characterProps['race']));
            $character->setClass($em->getRepository('AppBundle:Classes')->find($characterProps['class']));
            $character->setAlignment($em->getRepository('AppBundle:Alignments')->find($characterProps['alignment']));
            $character->setDeity($em->getRepository('AppBundle:Deities')->find($characterProps['deity']));
            $character->setSize($characterProps['size']);
            $character->setAge($characterProps['age']);
            $character->setGender($characterProps['gender']);
            $character->setHeight($characterProps['height']);
            $character->setWeight($characterProps['weight']);
            $character->setEyes($characterProps['eyes']);
            $character->setHair($characterProps['hair']);
            $character->setSkin($characterProps['skin']);

            $em->persist($character);
            $em->flush();
            $em->clear();

            $statsProps = $parameters['stats'];

            $stats = new Stats();
            $stats->setCharacter($character);

            /* ABILITIES */
            $stats->setStrength($statsProps['abilities']['strength']);
            $stats->setDexterity($statsProps['abilities']['dexterity']);
            $stats->setConstitution($statsProps['abilities']['constitution']);
            $stats->setIntelligence($statsProps['abilities']['intelligence']);
            $stats->setWisdom($statsProps['abilities']['wisdom']);
            $stats->setCharisma($statsProps['abilities']['charisma']);

            /* GENERAL */
            $stats->setHitPoints($statsProps['general']['hit_points']);
            $stats->setDamageReduction($statsProps['general']['damage_reduction']);
            $stats->setSpeed($statsProps['general']['speed']);
            $stats->setSpellResistance($statsProps['general']['spell_resistance']);
            $stats->setBaseAttackBonus(self::calculateBAB($statsProps['general']['base_attack_bonus']));

            /* AC */
            $stats->setArmorBonus($statsProps['ac']['armor_bonus']);
            $stats->setShieldBonus($statsProps['ac']['shield_bonus']);
            $stats->setSizeModifier($statsProps['ac']['size_modifier']);
            $stats->setNaturalArmor($statsProps['ac']['natural_armor']);
            $stats->setDeflectionModifier($statsProps['ac']['deflection_modifier']);
            $stats->setAcMiscModifier($statsProps['ac']['misc_modifier']);
            $stats->setInitiativeMiscModifier($statsProps['initiative']['misc_modifier']);

            /* SAVING THROWS */
            $stats->setFortitudeBaseSave($statsProps['saving_throws']['fortitude']['base_save']);
            $stats->setFortitudeMagicModifier($statsProps['saving_throws']['fortitude']['magic_modifier']);
            $stats->setFortitudeMiscModifier($statsProps['saving_throws']['fortitude']['misc_modifier']);
            $stats->setReflexBaseSave($statsProps['saving_throws']['reflex']['base_save']);
            $stats->setReflexMagicModifier($statsProps['saving_throws']['reflex']['magic_modifier']);
            $stats->setReflexMiscModifier($statsProps['saving_throws']['reflex']['misc_modifier']);
            $stats->setWillBaseSave($statsProps['saving_throws']['will']['base_save']);
            $stats->setWillMagicModifier($statsProps['saving_throws']['will']['magic_modifier']);
            $stats->setWillMiscModifier($statsProps['saving_throws']['will']['misc_modifier']);

            $em->persist($stats);
            $em->flush();
            $em->clear();

            $skillsProps = $parameters['skills'];

            foreach ($skillsProps as $skillName => $skillValues) {
                $skill = $em->getRepository('AppBundle:Skills')->findOneByName($skillName);
                
                $charSkill = new CharacterSkills();
                $charSkill->setCharacter($character);
                $charSkill->setSkill($skill);
                $charSkill->setRanks($skillValues['ranks']);
                $charSkill->setMiscModifier($skillValues['misc_mod']);
                $em->persist($charSkill);
            }

            $em->flush();
            $em->clear();

            $weaponsProps = $parameters['weapons'];

            foreach ($weaponsProps as $weaponsProp) {
                $weapon = new Weapons();
                $weapon->setCharacter($character);
                $weapon->setName($weaponsProp['name']);
                $weapon->setAttackBonus($weaponsProp['attack_bonus']);
                $weapon->setDamage($weaponsProp['damage']);
                $weapon->setCritical($weaponsProp['critical']);
                $weapon->setWeaponRange($weaponsProp['range']);
                $weapon->setType($weaponsProp['type']);
                $weapon->setNotes($weaponsProp['notes']);
                $em->persist($weapon);
            }

            $gearProps = $parameters['gear'];

            foreach ($gearProps as $gearProp) {
                $gear = new Gear();
                $gear->setCharacter($character);
                $gear->setName($gearProp['name']);
                $gear->setType($gearProp['type']);
                $gear->setAcBonus($gearProp['ac_bonus']);
                $gear->setMaxDex($gearProp['max_dex']);
                $gear->setCheckPenalty($gearProp['check_penalty']);
                $gear->setSpellFailure($gearProp['spell_failure']);
                $gear->setSpeed($gearProp['spees']);
                $gear->setWeight($gearProp['weight']);
                $gear->setSpecialProperties($gearProp['special_properties']);
                $em->persist($gear);
            }
            
            $itemsProps = $parameters['items'];

            foreach ($itemsProps as $itemsProp) {
                $items = new Items();
                $items->setCharacter($character);
                $items->setName($itemsProp['name']);
                $items->setQuantity($itemsProp['quantity']);
                $items->setWeight($itemsProp['weight']);
                $em->persist($items);
            }

            $em->flush();
            $em->clear();

            return $character->getId();
        }
        catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    private function calculateBAB(string $bab) : array
    {
        return array(1);
    }

    private function generateCharacterJson(int $characterId): array
    {
        $em = $this->getDoctrine()->getManager();

        $character = $em->getRepository('AppBundle:Characters')->find($characterId);
        $stats = $em->getRepository('AppBundle:Stats')->findOneByCharacter($character);
        $skills = $em->getRepository('AppBundle:CharacterSkills')->findByCharacter($character);

        return array(
            'character' => array(
                'name' => $character->getName(),
                'player' => $character->getPlayer(),
                'race' => $character->getRace()->getId(),
                'class' => $character->getClass()->getId(),
                'alignment' => $character->getAlignment()->getId(),
                'deity' => $character->getDeity()->getId(),
                'size' => $character->getSize(),
                'age' => $character->getAge(),
                'gender' => $character->getGender(),
                'height' => $character->getHeight(),
                'weight' => $character->getWeight(),
                'eyes' => $character->getEyes(),
                'hair' => $character->getHair(),
                'skin' => $character->getSkin(),
            ),
            'stats' => array(
                'strength' => $stats->getStrength(),
                'dexterity' => $stats->getDexterity(),
                'constitution' => $stats->getConstitution(),
                'intelligence' => $stats->getIntelligence(),
                'wisdom' => $stats->getWisdom(),
                'charisma' => $stats->getCharisma(),
                'hit_points' => $stats->getHitPoints(),
                'damage_reduction' => $stats->getDamageReduction(),
                'speed' => $stats->getSpeed(),
                'spell_resistance' => $stats->getSpellResistance(),
                'base_attack_bonus' => $stats->getBaseAttackBonus(),
                'armor_bonus' => $stats->getArmorBonus(),
                'shield_bonus' => $stats->getShieldBonus(),
                'size_modifier' => $stats->getSizeModifier(),
                'natural_armor' => $stats->getNaturalArmor(),
                'deflection_modifier' => $stats->getDeflectionModifier(),
                'ac_misc_modifier' => $stats->getAcMiscModifier(),
                'initiative_misc_modifier' => $stats->getInitiativeMiscModifier(),
                'fortitude_base_save' => $stats->getFortitudeBaseSave(),
                'fortitude_magic_modifier' => $stats->getFortitudeMagicModifier(),
                'fortitude_misc_modifier' => $stats->getFortitudeMiscModifier(),
                'reflex_base_save' => $stats->getReflexBaseSave(),
                'reflex_magic_modifier' => $stats->getReflexMagicModifier(),
                'reflex_misc_modifier' => $stats->getReflexMiscModifier(),
                'will_base_save' => $stats->getWillBaseSave(),
                'will_magic_modifier' => $stats->getWillMagicModifier(),
                'will_misc_modifier' => $stats->getWillMiscModifier(),
            ),
        );
    }
}
