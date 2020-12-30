<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Characters")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $character;

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
    private $strength_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $dexterity_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $constitution_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intelligence_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $wisdom_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $charisma_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $experience_points;

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
    private $armor_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $shield_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $size_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $natural_armor;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $deflection_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ac_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $damage_reduction;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $initiative_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_temp_modifier;

    /**
     * @var array
     *
     * @ORM\Column(type="simple_array")
     */
    private $base_attack_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_resistance;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $grapple_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spell_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $arcane_spell_failure;



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
     * Set strength.
     *
     * @param int $strength
     *
     * @return Stats
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
     * @return Stats
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
     * @return Stats
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
     * @return Stats
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
     * @return Stats
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
     * @return Stats
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
     * Set strengthTempModifier.
     *
     * @param int $strengthTempModifier
     *
     * @return Stats
     */
    public function setStrengthTempModifier($strengthTempModifier)
    {
        $this->strength_temp_modifier = $strengthTempModifier;

        return $this;
    }

    /**
     * Get strengthTempModifier.
     *
     * @return int
     */
    public function getStrengthTempModifier()
    {
        return $this->strength_temp_modifier;
    }

    /**
     * Set dexterityTempModifier.
     *
     * @param int $dexterityTempModifier
     *
     * @return Stats
     */
    public function setDexterityTempModifier($dexterityTempModifier)
    {
        $this->dexterity_temp_modifier = $dexterityTempModifier;

        return $this;
    }

    /**
     * Get dexterityTempModifier.
     *
     * @return int
     */
    public function getDexterityTempModifier()
    {
        return $this->dexterity_temp_modifier;
    }

    /**
     * Set constitutionTempModifier.
     *
     * @param int $constitutionTempModifier
     *
     * @return Stats
     */
    public function setConstitutionTempModifier($constitutionTempModifier)
    {
        $this->constitution_temp_modifier = $constitutionTempModifier;

        return $this;
    }

    /**
     * Get constitutionTempModifier.
     *
     * @return int
     */
    public function getConstitutionTempModifier()
    {
        return $this->constitution_temp_modifier;
    }

    /**
     * Set intelligenceTempModifier.
     *
     * @param int $intelligenceTempModifier
     *
     * @return Stats
     */
    public function setIntelligenceTempModifier($intelligenceTempModifier)
    {
        $this->intelligence_temp_modifier = $intelligenceTempModifier;

        return $this;
    }

    /**
     * Get intelligenceTempModifier.
     *
     * @return int
     */
    public function getIntelligenceTempModifier()
    {
        return $this->intelligence_temp_modifier;
    }

    /**
     * Set wisdomTempModifier.
     *
     * @param int $wisdomTempModifier
     *
     * @return Stats
     */
    public function setWisdomTempModifier($wisdomTempModifier)
    {
        $this->wisdom_temp_modifier = $wisdomTempModifier;

        return $this;
    }

    /**
     * Get wisdomTempModifier.
     *
     * @return int
     */
    public function getWisdomTempModifier()
    {
        return $this->wisdom_temp_modifier;
    }

    /**
     * Set charismaTempModifier.
     *
     * @param int $charismaTempModifier
     *
     * @return Stats
     */
    public function setCharismaTempModifier($charismaTempModifier)
    {
        $this->charisma_temp_modifier = $charismaTempModifier;

        return $this;
    }

    /**
     * Get charismaTempModifier.
     *
     * @return int
     */
    public function getCharismaTempModifier()
    {
        return $this->charisma_temp_modifier;
    }

    /**
     * Set experiencePoints.
     *
     * @param int $experiencePoints
     *
     * @return Stats
     */
    public function setExperiencePoints($experiencePoints)
    {
        $this->experience_points = $experiencePoints;

        return $this;
    }

    /**
     * Get experiencePoints.
     *
     * @return int
     */
    public function getExperiencePoints()
    {
        return $this->experience_points;
    }

    /**
     * Set hitPoints.
     *
     * @param int $hitPoints
     *
     * @return Stats
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
     * Set armorBonus.
     *
     * @param int $armorBonus
     *
     * @return Stats
     */
    public function setArmorBonus($armorBonus)
    {
        $this->armor_bonus = $armorBonus;

        return $this;
    }

    /**
     * Get armorBonus.
     *
     * @return int
     */
    public function getArmorBonus()
    {
        return $this->armor_bonus;
    }

    /**
     * Set shieldBonus.
     *
     * @param int $shieldBonus
     *
     * @return Stats
     */
    public function setShieldBonus($shieldBonus)
    {
        $this->shield_bonus = $shieldBonus;

        return $this;
    }

    /**
     * Get shieldBonus.
     *
     * @return int
     */
    public function getShieldBonus()
    {
        return $this->shield_bonus;
    }

    /**
     * Set sizeModifier.
     *
     * @param int $sizeModifier
     *
     * @return Stats
     */
    public function setSizeModifier($sizeModifier)
    {
        $this->size_modifier = $sizeModifier;

        return $this;
    }

    /**
     * Get sizeModifier.
     *
     * @return int
     */
    public function getSizeModifier()
    {
        return $this->size_modifier;
    }

    /**
     * Set naturalArmor.
     *
     * @param int $naturalArmor
     *
     * @return Stats
     */
    public function setNaturalArmor($naturalArmor)
    {
        $this->natural_armor = $naturalArmor;

        return $this;
    }

    /**
     * Get naturalArmor.
     *
     * @return int
     */
    public function getNaturalArmor()
    {
        return $this->natural_armor;
    }

    /**
     * Set deflectionModifier.
     *
     * @param int $deflectionModifier
     *
     * @return Stats
     */
    public function setDeflectionModifier($deflectionModifier)
    {
        $this->deflection_modifier = $deflectionModifier;

        return $this;
    }

    /**
     * Get deflectionModifier.
     *
     * @return int
     */
    public function getDeflectionModifier()
    {
        return $this->deflection_modifier;
    }

    /**
     * Set acMiscModifier.
     *
     * @param int $acMiscModifier
     *
     * @return Stats
     */
    public function setAcMiscModifier($acMiscModifier)
    {
        $this->ac_misc_modifier = $acMiscModifier;

        return $this;
    }

    /**
     * Get acMiscModifier.
     *
     * @return int
     */
    public function getAcMiscModifier()
    {
        return $this->ac_misc_modifier;
    }

    /**
     * Set damageReduction.
     *
     * @param int $damageReduction
     *
     * @return Stats
     */
    public function setDamageReduction($damageReduction)
    {
        $this->damage_reduction = $damageReduction;

        return $this;
    }

    /**
     * Get damageReduction.
     *
     * @return int
     */
    public function getDamageReduction()
    {
        return $this->damage_reduction;
    }

    /**
     * Set speed.
     *
     * @param int $speed
     *
     * @return Stats
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed.
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set initiativeMiscModifier.
     *
     * @param int $initiativeMiscModifier
     *
     * @return Stats
     */
    public function setInitiativeMiscModifier($initiativeMiscModifier)
    {
        $this->initiative_misc_modifier = $initiativeMiscModifier;

        return $this;
    }

    /**
     * Get initiativeMiscModifier.
     *
     * @return int
     */
    public function getInitiativeMiscModifier()
    {
        return $this->initiative_misc_modifier;
    }

    /**
     * Set fortitudeBaseSave.
     *
     * @param int $fortitudeBaseSave
     *
     * @return Stats
     */
    public function setFortitudeBaseSave($fortitudeBaseSave)
    {
        $this->fortitude_base_save = $fortitudeBaseSave;

        return $this;
    }

    /**
     * Get fortitudeBaseSave.
     *
     * @return int
     */
    public function getFortitudeBaseSave()
    {
        return $this->fortitude_base_save;
    }

    /**
     * Set fortitudeMagicModifier.
     *
     * @param int $fortitudeMagicModifier
     *
     * @return Stats
     */
    public function setFortitudeMagicModifier($fortitudeMagicModifier)
    {
        $this->fortitude_magic_modifier = $fortitudeMagicModifier;

        return $this;
    }

    /**
     * Get fortitudeMagicModifier.
     *
     * @return int
     */
    public function getFortitudeMagicModifier()
    {
        return $this->fortitude_magic_modifier;
    }

    /**
     * Set fortitudeMiscModifier.
     *
     * @param int $fortitudeMiscModifier
     *
     * @return Stats
     */
    public function setFortitudeMiscModifier($fortitudeMiscModifier)
    {
        $this->fortitude_misc_modifier = $fortitudeMiscModifier;

        return $this;
    }

    /**
     * Get fortitudeMiscModifier.
     *
     * @return int
     */
    public function getFortitudeMiscModifier()
    {
        return $this->fortitude_misc_modifier;
    }

    /**
     * Set fortitudeTempModifier.
     *
     * @param int $fortitudeTempModifier
     *
     * @return Stats
     */
    public function setFortitudeTempModifier($fortitudeTempModifier)
    {
        $this->fortitude_temp_modifier = $fortitudeTempModifier;

        return $this;
    }

    /**
     * Get fortitudeTempModifier.
     *
     * @return int
     */
    public function getFortitudeTempModifier()
    {
        return $this->fortitude_temp_modifier;
    }

    /**
     * Set reflexBaseSave.
     *
     * @param int $reflexBaseSave
     *
     * @return Stats
     */
    public function setReflexBaseSave($reflexBaseSave)
    {
        $this->reflex_base_save = $reflexBaseSave;

        return $this;
    }

    /**
     * Get reflexBaseSave.
     *
     * @return int
     */
    public function getReflexBaseSave()
    {
        return $this->reflex_base_save;
    }

    /**
     * Set reflexMagicModifier.
     *
     * @param int $reflexMagicModifier
     *
     * @return Stats
     */
    public function setReflexMagicModifier($reflexMagicModifier)
    {
        $this->reflex_magic_modifier = $reflexMagicModifier;

        return $this;
    }

    /**
     * Get reflexMagicModifier.
     *
     * @return int
     */
    public function getReflexMagicModifier()
    {
        return $this->reflex_magic_modifier;
    }

    /**
     * Set reflexMiscModifier.
     *
     * @param int $reflexMiscModifier
     *
     * @return Stats
     */
    public function setReflexMiscModifier($reflexMiscModifier)
    {
        $this->reflex_misc_modifier = $reflexMiscModifier;

        return $this;
    }

    /**
     * Get reflexMiscModifier.
     *
     * @return int
     */
    public function getReflexMiscModifier()
    {
        return $this->reflex_misc_modifier;
    }

    /**
     * Set reflexTempModifier.
     *
     * @param int $reflexTempModifier
     *
     * @return Stats
     */
    public function setReflexTempModifier($reflexTempModifier)
    {
        $this->reflex_temp_modifier = $reflexTempModifier;

        return $this;
    }

    /**
     * Get reflexTempModifier.
     *
     * @return int
     */
    public function getReflexTempModifier()
    {
        return $this->reflex_temp_modifier;
    }

    /**
     * Set willBaseSave.
     *
     * @param int $willBaseSave
     *
     * @return Stats
     */
    public function setWillBaseSave($willBaseSave)
    {
        $this->will_base_save = $willBaseSave;

        return $this;
    }

    /**
     * Get willBaseSave.
     *
     * @return int
     */
    public function getWillBaseSave()
    {
        return $this->will_base_save;
    }

    /**
     * Set willMagicModifier.
     *
     * @param int $willMagicModifier
     *
     * @return Stats
     */
    public function setWillMagicModifier($willMagicModifier)
    {
        $this->will_magic_modifier = $willMagicModifier;

        return $this;
    }

    /**
     * Get willMagicModifier.
     *
     * @return int
     */
    public function getWillMagicModifier()
    {
        return $this->will_magic_modifier;
    }

    /**
     * Set willMiscModifier.
     *
     * @param int $willMiscModifier
     *
     * @return Stats
     */
    public function setWillMiscModifier($willMiscModifier)
    {
        $this->will_misc_modifier = $willMiscModifier;

        return $this;
    }

    /**
     * Get willMiscModifier.
     *
     * @return int
     */
    public function getWillMiscModifier()
    {
        return $this->will_misc_modifier;
    }

    /**
     * Set willTempModifier.
     *
     * @param int $willTempModifier
     *
     * @return Stats
     */
    public function setWillTempModifier($willTempModifier)
    {
        $this->will_temp_modifier = $willTempModifier;

        return $this;
    }

    /**
     * Get willTempModifier.
     *
     * @return int
     */
    public function getWillTempModifier()
    {
        return $this->will_temp_modifier;
    }

    /**
     * Set baseAttackBonus.
     *
     * @param array $baseAttackBonus
     *
     * @return Stats
     */
    public function setBaseAttackBonus($baseAttackBonus)
    {
        $this->base_attack_bonus = $baseAttackBonus;

        return $this;
    }

    /**
     * Get baseAttackBonus.
     *
     * @return array
     */
    public function getBaseAttackBonus()
    {
        return $this->base_attack_bonus;
    }

    /**
     * Set spellResistance.
     *
     * @param int $spellResistance
     *
     * @return Stats
     */
    public function setSpellResistance($spellResistance)
    {
        $this->spell_resistance = $spellResistance;

        return $this;
    }

    /**
     * Get spellResistance.
     *
     * @return int
     */
    public function getSpellResistance()
    {
        return $this->spell_resistance;
    }

    /**
     * Set grappleMiscModifier.
     *
     * @param int $grappleMiscModifier
     *
     * @return Stats
     */
    public function setGrappleMiscModifier($grappleMiscModifier)
    {
        $this->grapple_misc_modifier = $grappleMiscModifier;

        return $this;
    }

    /**
     * Get grappleMiscModifier.
     *
     * @return int
     */
    public function getGrappleMiscModifier()
    {
        return $this->grapple_misc_modifier;
    }

    /**
     * Set spellSave.
     *
     * @param int|null $spellSave
     *
     * @return Stats
     */
    public function setSpellSave($spellSave = null)
    {
        $this->spell_save = $spellSave;

        return $this;
    }

    /**
     * Get spellSave.
     *
     * @return int|null
     */
    public function getSpellSave()
    {
        return $this->spell_save;
    }

    /**
     * Set arcaneSpellFailure.
     *
     * @param int|null $arcaneSpellFailure
     *
     * @return Stats
     */
    public function setArcaneSpellFailure($arcaneSpellFailure = null)
    {
        $this->arcane_spell_failure = $arcaneSpellFailure;

        return $this;
    }

    /**
     * Get arcaneSpellFailure.
     *
     * @return int|null
     */
    public function getArcaneSpellFailure()
    {
        return $this->arcane_spell_failure;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return Stats
     */
    public function setCharacter(\AppBundle\Entity\Characters $character = null)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character.
     *
     * @return \AppBundle\Entity\Characters|null
     */
    public function getCharacter()
    {
        return $this->character;
    }
}
