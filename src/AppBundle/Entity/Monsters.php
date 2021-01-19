<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monsters
 *
 * @ORM\Table(name="monsters")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MonstersRepository")
 */
class Monsters
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=80)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $hit_points;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ac;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $initiative;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $base_attack_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $grapple;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $strength;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $dexterity;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $constitution;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $wisdom;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $charisma;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $weapon_1;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_1;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage_1;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $weapon_2;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_2;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damage_2;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $weapon_3;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_3;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage_3;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $weapon_4;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_4;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage_4;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $weapon_5;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_5;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage_5;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $weapon_6;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bonus_6;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage_6;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $damage_reduction;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $immunity_1;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $immunity_2;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $immunity_3;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $immunity_4;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $misc;




    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set photo.
     *
     * @param string|null $photo
     *
     * @return Monsters
     */
    public function setPhoto($photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Monsters
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set hitPoints.
     *
     * @param int $hitPoints
     *
     * @return Monsters
     */
    public function setHitPoints($hitPoints)
    {
        $this->hit_points = $hitPoints;

        return $this;
    }

    /**
     * Get hitPoints.
     *
     * @return int
     */
    public function getHitPoints()
    {
        return $this->hit_points;
    }

    /**
     * Set ac.
     *
     * @param int $ac
     *
     * @return Monsters
     */
    public function setAc($ac)
    {
        $this->ac = $ac;

        return $this;
    }

    /**
     * Get ac.
     *
     * @return int
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * Set initiative.
     *
     * @param int $initiative
     *
     * @return Monsters
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative.
     *
     * @return int
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set baseAttackBonus.
     *
     * @param string $baseAttackBonus
     *
     * @return Monsters
     */
    public function setBaseAttackBonus($baseAttackBonus)
    {
        $this->base_attack_bonus = $baseAttackBonus;

        return $this;
    }

    /**
     * Get baseAttackBonus.
     *
     * @return string
     */
    public function getBaseAttackBonus()
    {
        return $this->base_attack_bonus;
    }

    /**
     * Set grapple.
     *
     * @param int $grapple
     *
     * @return Monsters
     */
    public function setGrapple($grapple)
    {
        $this->grapple = $grapple;

        return $this;
    }

    /**
     * Get grapple.
     *
     * @return int
     */
    public function getGrapple()
    {
        return $this->grapple;
    }

    /**
     * Set strength.
     *
     * @param int $strength
     *
     * @return Monsters
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength.
     *
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set dexterity.
     *
     * @param int $dexterity
     *
     * @return Monsters
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    /**
     * Get dexterity.
     *
     * @return int
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set constitution.
     *
     * @param int $constitution
     *
     * @return Monsters
     */
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;

        return $this;
    }

    /**
     * Get constitution.
     *
     * @return int
     */
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * Set intelligence.
     *
     * @param int $intelligence
     *
     * @return Monsters
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence.
     *
     * @return int
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set wisdom.
     *
     * @param int $wisdom
     *
     * @return Monsters
     */
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;

        return $this;
    }

    /**
     * Get wisdom.
     *
     * @return int
     */
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * Set charisma.
     *
     * @param int $charisma
     *
     * @return Monsters
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;

        return $this;
    }

    /**
     * Get charisma.
     *
     * @return int
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * Set fortitude.
     *
     * @param int $fortitude
     *
     * @return Monsters
     */
    public function setFortitude($fortitude)
    {
        $this->fortitude = $fortitude;

        return $this;
    }

    /**
     * Get fortitude.
     *
     * @return int
     */
    public function getFortitude()
    {
        return $this->fortitude;
    }

    /**
     * Set reflex.
     *
     * @param int $reflex
     *
     * @return Monsters
     */
    public function setReflex($reflex)
    {
        $this->reflex = $reflex;

        return $this;
    }

    /**
     * Get reflex.
     *
     * @return int
     */
    public function getReflex()
    {
        return $this->reflex;
    }

    /**
     * Set will.
     *
     * @param int $will
     *
     * @return Monsters
     */
    public function setWill($will)
    {
        $this->will = $will;

        return $this;
    }

    /**
     * Get will.
     *
     * @return int
     */
    public function getWill()
    {
        return $this->will;
    }

    /**
     * Set weapon1.
     *
     * @param string $weapon1
     *
     * @return Monsters
     */
    public function setWeapon1($weapon1)
    {
        $this->weapon_1 = $weapon1;

        return $this;
    }

    /**
     * Get weapon1.
     *
     * @return string
     */
    public function getWeapon1()
    {
        return $this->weapon_1;
    }

    /**
     * Set bonus1.
     *
     * @param int|null $bonus1
     *
     * @return Monsters
     */
    public function setBonus1($bonus1 = null)
    {
        $this->bonus_1 = $bonus1;

        return $this;
    }

    /**
     * Get bonus1.
     *
     * @return int|null
     */
    public function getBonus1()
    {
        return $this->bonus_1;
    }

    /**
     * Set damage1.
     *
     * @param string $damage1
     *
     * @return Monsters
     */
    public function setDamage1($damage1)
    {
        $this->damage_1 = $damage1;

        return $this;
    }

    /**
     * Get damage1.
     *
     * @return string
     */
    public function getDamage1()
    {
        return $this->damage_1;
    }

    /**
     * Set weapon2.
     *
     * @param string|null $weapon2
     *
     * @return Monsters
     */
    public function setWeapon2($weapon2 = null)
    {
        $this->weapon_2 = $weapon2;

        return $this;
    }

    /**
     * Get weapon2.
     *
     * @return string|null
     */
    public function getWeapon2()
    {
        return $this->weapon_2;
    }

    /**
     * Set bonus2.
     *
     * @param int|null $bonus2
     *
     * @return Monsters
     */
    public function setBonus2($bonus2 = null)
    {
        $this->bonus_2 = $bonus2;

        return $this;
    }

    /**
     * Get bonus2.
     *
     * @return int|null
     */
    public function getBonus2()
    {
        return $this->bonus_2;
    }

    /**
     * Set damage2.
     *
     * @param string|null $damage2
     *
     * @return Monsters
     */
    public function setDamage2($damage2 = null)
    {
        $this->damage_2 = $damage2;

        return $this;
    }

    /**
     * Get damage2.
     *
     * @return string|null
     */
    public function getDamage2()
    {
        return $this->damage_2;
    }

    /**
     * Set weapon3.
     *
     * @param string $weapon3
     *
     * @return Monsters
     */
    public function setWeapon3($weapon3)
    {
        $this->weapon_3 = $weapon3;

        return $this;
    }

    /**
     * Get weapon3.
     *
     * @return string
     */
    public function getWeapon3()
    {
        return $this->weapon_3;
    }

    /**
     * Set bonus3.
     *
     * @param int|null $bonus3
     *
     * @return Monsters
     */
    public function setBonus3($bonus3 = null)
    {
        $this->bonus_3 = $bonus3;

        return $this;
    }

    /**
     * Get bonus3.
     *
     * @return int|null
     */
    public function getBonus3()
    {
        return $this->bonus_3;
    }

    /**
     * Set damage3.
     *
     * @param string $damage3
     *
     * @return Monsters
     */
    public function setDamage3($damage3)
    {
        $this->damage_3 = $damage3;

        return $this;
    }

    /**
     * Get damage3.
     *
     * @return string
     */
    public function getDamage3()
    {
        return $this->damage_3;
    }

    /**
     * Set weapon4.
     *
     * @param string $weapon4
     *
     * @return Monsters
     */
    public function setWeapon4($weapon4)
    {
        $this->weapon_4 = $weapon4;

        return $this;
    }

    /**
     * Get weapon4.
     *
     * @return string
     */
    public function getWeapon4()
    {
        return $this->weapon_4;
    }

    /**
     * Set bonus4.
     *
     * @param int|null $bonus4
     *
     * @return Monsters
     */
    public function setBonus4($bonus4 = null)
    {
        $this->bonus_4 = $bonus4;

        return $this;
    }

    /**
     * Get bonus4.
     *
     * @return int|null
     */
    public function getBonus4()
    {
        return $this->bonus_4;
    }

    /**
     * Set damage4.
     *
     * @param string $damage4
     *
     * @return Monsters
     */
    public function setDamage4($damage4)
    {
        $this->damage_4 = $damage4;

        return $this;
    }

    /**
     * Get damage4.
     *
     * @return string
     */
    public function getDamage4()
    {
        return $this->damage_4;
    }

    /**
     * Set weapon5.
     *
     * @param string $weapon5
     *
     * @return Monsters
     */
    public function setWeapon5($weapon5)
    {
        $this->weapon_5 = $weapon5;

        return $this;
    }

    /**
     * Get weapon5.
     *
     * @return string
     */
    public function getWeapon5()
    {
        return $this->weapon_5;
    }

    /**
     * Set bonus5.
     *
     * @param int|null $bonus5
     *
     * @return Monsters
     */
    public function setBonus5($bonus5 = null)
    {
        $this->bonus_5 = $bonus5;

        return $this;
    }

    /**
     * Get bonus5.
     *
     * @return int|null
     */
    public function getBonus5()
    {
        return $this->bonus_5;
    }

    /**
     * Set damage5.
     *
     * @param string $damage5
     *
     * @return Monsters
     */
    public function setDamage5($damage5)
    {
        $this->damage_5 = $damage5;

        return $this;
    }

    /**
     * Get damage5.
     *
     * @return string
     */
    public function getDamage5()
    {
        return $this->damage_5;
    }

    /**
     * Set weapon6.
     *
     * @param string $weapon6
     *
     * @return Monsters
     */
    public function setWeapon6($weapon6)
    {
        $this->weapon_6 = $weapon6;

        return $this;
    }

    /**
     * Get weapon6.
     *
     * @return string
     */
    public function getWeapon6()
    {
        return $this->weapon_6;
    }

    /**
     * Set bonus6.
     *
     * @param int|null $bonus6
     *
     * @return Monsters
     */
    public function setBonus6($bonus6 = null)
    {
        $this->bonus_6 = $bonus6;

        return $this;
    }

    /**
     * Get bonus6.
     *
     * @return int|null
     */
    public function getBonus6()
    {
        return $this->bonus_6;
    }

    /**
     * Set damage6.
     *
     * @param string $damage6
     *
     * @return Monsters
     */
    public function setDamage6($damage6)
    {
        $this->damage_6 = $damage6;

        return $this;
    }

    /**
     * Get damage6.
     *
     * @return string
     */
    public function getDamage6()
    {
        return $this->damage_6;
    }

    /**
     * Set damageReduction.
     *
     * @param string|null $damageReduction
     *
     * @return Monsters
     */
    public function setDamageReduction($damageReduction = null)
    {
        $this->damage_reduction = $damageReduction;

        return $this;
    }

    /**
     * Get damageReduction.
     *
     * @return string|null
     */
    public function getDamageReduction()
    {
        return $this->damage_reduction;
    }

    /**
     * Set immunity1.
     *
     * @param string|null $immunity1
     *
     * @return Monsters
     */
    public function setImmunity1($immunity1 = null)
    {
        $this->immunity_1 = $immunity1;

        return $this;
    }

    /**
     * Get immunity1.
     *
     * @return string|null
     */
    public function getImmunity1()
    {
        return $this->immunity_1;
    }

    /**
     * Set immunity2.
     *
     * @param string|null $immunity2
     *
     * @return Monsters
     */
    public function setImmunity2($immunity2 = null)
    {
        $this->immunity_2 = $immunity2;

        return $this;
    }

    /**
     * Get immunity2.
     *
     * @return string|null
     */
    public function getImmunity2()
    {
        return $this->immunity_2;
    }

    /**
     * Set immunity3.
     *
     * @param string|null $immunity3
     *
     * @return Monsters
     */
    public function setImmunity3($immunity3 = null)
    {
        $this->immunity_3 = $immunity3;

        return $this;
    }

    /**
     * Get immunity3.
     *
     * @return string|null
     */
    public function getImmunity3()
    {
        return $this->immunity_3;
    }

    /**
     * Set immunity4.
     *
     * @param string|null $immunity4
     *
     * @return Monsters
     */
    public function setImmunity4($immunity4 = null)
    {
        $this->immunity_4 = $immunity4;

        return $this;
    }

    /**
     * Get immunity4.
     *
     * @return string|null
     */
    public function getImmunity4()
    {
        return $this->immunity_4;
    }

    /**
     * Set misc.
     *
     * @param string|null $misc
     *
     * @return Monsters
     */
    public function setMisc($misc = null)
    {
        $this->misc = $misc;

        return $this;
    }

    /**
     * Get misc.
     *
     * @return string|null
     */
    public function getMisc()
    {
        return $this->misc;
    }
}
