<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessCodes;
use AppBundle\Entity\Characters;
use AppBundle\Entity\CharacterSkills;
use AppBundle\Entity\DailySpells;
use AppBundle\Entity\Feats;
use AppBundle\Entity\Gear;
use AppBundle\Entity\Items;
use AppBundle\Entity\Languages;
use AppBundle\Entity\Money;
use AppBundle\Entity\SpecialAbilities;
use AppBundle\Entity\Spells;
use AppBundle\Entity\Stats;
use AppBundle\Entity\Weapons;
use AppBundle\Services\NotEmpty;
use AppBundle\Services\Responder;
use DateTime;
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
        $exp = new DateTime('now +24 hours');
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
        $accessCode = $parameters['access_code'];

        $em = $this->getDoctrine()->getManager();

        if (count($em->getRepository('AppBundle:AccessCodes')->findOneBy(array('code' => $accessCode))) === 0) {
            return Responder::generateError('Your code is invalid');
        }

        $result = self::saveCharacter($parameters);

        if (is_numeric($result)) {
            return Responder::generateResponse(array('characterId' => $result));
        }
        else {
            return Responder::generateError($result);
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
            $character->setAge(NotEmpty::getNotEmpty($characterProps['age'], 0));
            $character->setGender($characterProps['gender']);
            $character->setHeight(NotEmpty::getNotEmpty($characterProps['height'], 0));
            $character->setWeight(NotEmpty::getNotEmpty($characterProps['weight'], 0));
            $character->setEyes($characterProps['eyes']);
            $character->setHair($characterProps['hair']);
            $character->setSkin($characterProps['skin']);

            $em->persist($character);
            $em->flush();

            $statsProps = $parameters['stats'];

            $stats = new Stats();
            $stats->setCharacter($character);

            /* ABILITIES */
            $stats->setStrength(NotEmpty::getNotEmpty($statsProps['abilities']['strength'], 0 ));
            $stats->setDexterity(NotEmpty::getNotEmpty($statsProps['abilities']['dexterity'], 0 ));
            $stats->setConstitution(NotEmpty::getNotEmpty($statsProps['abilities']['constitution'], 0 ));
            $stats->setIntelligence(NotEmpty::getNotEmpty($statsProps['abilities']['intelligence'], 0 ));
            $stats->setWisdom(NotEmpty::getNotEmpty($statsProps['abilities']['wisdom'], 0 ));
            $stats->setCharisma(NotEmpty::getNotEmpty($statsProps['abilities']['charisma'], 0 ));

            /* GENERAL */
            $stats->setHitPoints($statsProps['general']['hit_points']);
            $stats->setDamageReduction($statsProps['general']['damage_reduction']);
            $stats->setSpeed($statsProps['general']['speed']);
            $stats->setSpellResistance($statsProps['general']['spell_resistance']);
            $stats->setBaseAttackBonus(array_map('trim', explode('/', $statsProps['general']['base_attack_bonus'])));
            $stats->setSpellSave($statsProps['general']['spell_save']);
            $stats->setArcaneSpellFailure($statsProps['general']['arcane_spell_failure']);

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

            if (isset($parameters['weapons'])) {
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

                $em->flush();
            }

            if (isset($parameters['gear'])) {

                $gearProps = $parameters['gear'];

                foreach ($gearProps as $gearProp) {
                    $gear = new Gear();
                    $gear->setCharacter($character);
                    $gear->setName($gearProp['name']);
                    $gear->setType($gearProp['type']);
                    $gear->setAcBonus($gearProp['ac_bonus']);
                    $gear->setMaxDex($gearProp['max_dex']);
                    $gear->setCheckPenalty(NotEmpty::getNotEmpty($gearProp['check_penalty'], 0));
                    $gear->setSpellFailure(NotEmpty::getNotEmpty($gearProp['spell_failure'], 0));
                    $gear->setSpeed(NotEmpty::getNotEmpty($gearProp['speed'], 0));
                    $gear->setWeight(NotEmpty::getNotEmpty($gearProp['weight'], 0));
                    $gear->setSpecialProperties(NotEmpty::getNotEmpty($gearProp['special_properties'], 0));
                    $em->persist($gear);
                }

                $em->flush();
            }

            if (isset($parameters['items'])) {
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
            }

            if (isset($parameters['feat'])) {
                $featNames = $parameters['feat'];

                foreach ($featNames as $featName) {
                    $feat = new Feats();
                    $feat->setCharacter($character);
                    $feat->setName($featName);
                    $em->persist($feat);
                }

                $em->flush();
            }

            if (isset($parameters['special_ability'])) {
                $saNames = $parameters['special_ability'];

                foreach ($saNames as $saName) {
                    $sa = new SpecialAbilities();
                    $sa->setCharacter($character);
                    $sa->setName($saName);
                    $em->persist($sa);
                }

                $em->flush();
            }

            if (isset($parameters['personal_spells'])) {
                $personalSpellsProps = $parameters['personal_spells'];

                foreach ($personalSpellsProps as $personalSpellsProp) {
                    $spell = new Spells();
                    $spell->setCharacter($character);
                    $spell->setName($personalSpellsProp['name']);
                    $spell->setLevel($personalSpellsProp['level']);
                    $em->persist($spell);
                }

                $em->flush();
            }

            if (isset($parameters['daily_spells'])) {
                $dailySpellsProps = $parameters['daily_spells'];

                $dailySpells = new DailySpells();
                $dailySpells->setCharacter($character);

                foreach ($dailySpellsProps as $propName => $value) {
                    $setter = 'set' . implode('', array_map('ucwords', explode('_', $propName)));
                    if ($setter !== 'setSpellsKnown0') {
                        $dailySpells->{$setter}($value);
                    }
                }

                $em->persist($dailySpells);
                $em->flush();
            }


            $moneyProps = $parameters['money'];

            $money = new Money();
            $money->setCharacter($character);
            $money->setCopperPiece($moneyProps['copper']);
            $money->setSilverPiece($moneyProps['silver']);
            $money->setGoldPiece($moneyProps['gold']);
            $money->setPlatinumPiece($moneyProps['platinum']);

            $em->persist($money);
            $em->flush();

            if (isset($parameters['languages'])) {
                $languagesProps = $parameters['languages'];

                foreach ($languagesProps as $lang) {
                    $language = new Languages();
                    $language->setCharacter($character);
                    $language->setLanguage($lang);
                    $em->persist($language);
                }

                $em->flush();
            }

            return $character->getId();
        }
        catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
}
