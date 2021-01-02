<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSkills
 *
 * @ORM\Table(name="character_skills")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacterSkillsRepository")
 */
class CharacterSkills
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
    private $appraise_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $appraise_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $balance_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $balance_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bluff_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bluff_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $climb_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $climb_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $concentration_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $concentration_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $craft_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $craft_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $decipher_script_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $decipher_script_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $diplomacy_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $diplomacy_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $disable_device_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $disable_device_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $disguise_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $disguise_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $escape_artist_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $escape_artist_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $forgery_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $forgery_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $gather_information_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $gather_information_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $handle_animals_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $handle_animals_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $heal_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $heal_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $hide_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $hide_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intimidate_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intimidate_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $jump_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $jump_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $knowledge_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $knowledge_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $listen_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $listen_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $move_silently_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $move_silently_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $open_lock_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $open_lock_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $perform_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $perform_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $profession_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $profession_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ride_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ride_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $search_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $search_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $sense_motive_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $sense_motive_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $sleight_of_hand_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $sleight_of_hand_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spellcraft_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spellcraft_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spot_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spot_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $survival_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $survival_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $swim_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $swim_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $tumble_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $tumble_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $use_magic_device_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $use_magic_device_misc_modifier = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $use_ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $use_misc_modifier = 0;



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
     * Set appraiseRanks.
     *
     * @param int $appraiseRanks
     *
     * @return CharacterSkills
     */
    public function setAppraiseRanks($appraiseRanks)
    {
        $this->appraise_ranks = $appraiseRanks;

        return $this;
    }

    /**
     * Get appraiseRanks.
     *
     * @return int
     */
    public function getAppraiseRanks()
    {
        return $this->appraise_ranks;
    }

    /**
     * Set appraiseMiscModifier.
     *
     * @param int $appraiseMiscModifier
     *
     * @return CharacterSkills
     */
    public function setAppraiseMiscModifier($appraiseMiscModifier)
    {
        $this->appraise_misc_modifier = $appraiseMiscModifier;

        return $this;
    }

    /**
     * Get appraiseMiscModifier.
     *
     * @return int
     */
    public function getAppraiseMiscModifier()
    {
        return $this->appraise_misc_modifier;
    }

    /**
     * Set balanceRanks.
     *
     * @param int $balanceRanks
     *
     * @return CharacterSkills
     */
    public function setBalanceRanks($balanceRanks)
    {
        $this->balance_ranks = $balanceRanks;

        return $this;
    }

    /**
     * Get balanceRanks.
     *
     * @return int
     */
    public function getBalanceRanks()
    {
        return $this->balance_ranks;
    }

    /**
     * Set balanceMiscModifier.
     *
     * @param int $balanceMiscModifier
     *
     * @return CharacterSkills
     */
    public function setBalanceMiscModifier($balanceMiscModifier)
    {
        $this->balance_misc_modifier = $balanceMiscModifier;

        return $this;
    }

    /**
     * Get balanceMiscModifier.
     *
     * @return int
     */
    public function getBalanceMiscModifier()
    {
        return $this->balance_misc_modifier;
    }

    /**
     * Set bluffRanks.
     *
     * @param int $bluffRanks
     *
     * @return CharacterSkills
     */
    public function setBluffRanks($bluffRanks)
    {
        $this->bluff_ranks = $bluffRanks;

        return $this;
    }

    /**
     * Get bluffRanks.
     *
     * @return int
     */
    public function getBluffRanks()
    {
        return $this->bluff_ranks;
    }

    /**
     * Set bluffMiscModifier.
     *
     * @param int $bluffMiscModifier
     *
     * @return CharacterSkills
     */
    public function setBluffMiscModifier($bluffMiscModifier)
    {
        $this->bluff_misc_modifier = $bluffMiscModifier;

        return $this;
    }

    /**
     * Get bluffMiscModifier.
     *
     * @return int
     */
    public function getBluffMiscModifier()
    {
        return $this->bluff_misc_modifier;
    }

    /**
     * Set climbRanks.
     *
     * @param int $climbRanks
     *
     * @return CharacterSkills
     */
    public function setClimbRanks($climbRanks)
    {
        $this->climb_ranks = $climbRanks;

        return $this;
    }

    /**
     * Get climbRanks.
     *
     * @return int
     */
    public function getClimbRanks()
    {
        return $this->climb_ranks;
    }

    /**
     * Set climbMiscModifier.
     *
     * @param int $climbMiscModifier
     *
     * @return CharacterSkills
     */
    public function setClimbMiscModifier($climbMiscModifier)
    {
        $this->climb_misc_modifier = $climbMiscModifier;

        return $this;
    }

    /**
     * Get climbMiscModifier.
     *
     * @return int
     */
    public function getClimbMiscModifier()
    {
        return $this->climb_misc_modifier;
    }

    /**
     * Set concentrationRanks.
     *
     * @param int $concentrationRanks
     *
     * @return CharacterSkills
     */
    public function setConcentrationRanks($concentrationRanks)
    {
        $this->concentration_ranks = $concentrationRanks;

        return $this;
    }

    /**
     * Get concentrationRanks.
     *
     * @return int
     */
    public function getConcentrationRanks()
    {
        return $this->concentration_ranks;
    }

    /**
     * Set concentrationMiscModifier.
     *
     * @param int $concentrationMiscModifier
     *
     * @return CharacterSkills
     */
    public function setConcentrationMiscModifier($concentrationMiscModifier)
    {
        $this->concentration_misc_modifier = $concentrationMiscModifier;

        return $this;
    }

    /**
     * Get concentrationMiscModifier.
     *
     * @return int
     */
    public function getConcentrationMiscModifier()
    {
        return $this->concentration_misc_modifier;
    }

    /**
     * Set craftRanks.
     *
     * @param int $craftRanks
     *
     * @return CharacterSkills
     */
    public function setCraftRanks($craftRanks)
    {
        $this->craft_ranks = $craftRanks;

        return $this;
    }

    /**
     * Get craftRanks.
     *
     * @return int
     */
    public function getCraftRanks()
    {
        return $this->craft_ranks;
    }

    /**
     * Set craftMiscModifier.
     *
     * @param int $craftMiscModifier
     *
     * @return CharacterSkills
     */
    public function setCraftMiscModifier($craftMiscModifier)
    {
        $this->craft_misc_modifier = $craftMiscModifier;

        return $this;
    }

    /**
     * Get craftMiscModifier.
     *
     * @return int
     */
    public function getCraftMiscModifier()
    {
        return $this->craft_misc_modifier;
    }

    /**
     * Set decipherScriptRanks.
     *
     * @param int $decipherScriptRanks
     *
     * @return CharacterSkills
     */
    public function setDecipherScriptRanks($decipherScriptRanks)
    {
        $this->decipher_script_ranks = $decipherScriptRanks;

        return $this;
    }

    /**
     * Get decipherScriptRanks.
     *
     * @return int
     */
    public function getDecipherScriptRanks()
    {
        return $this->decipher_script_ranks;
    }

    /**
     * Set decipherScriptMiscModifier.
     *
     * @param int $decipherScriptMiscModifier
     *
     * @return CharacterSkills
     */
    public function setDecipherScriptMiscModifier($decipherScriptMiscModifier)
    {
        $this->decipher_script_misc_modifier = $decipherScriptMiscModifier;

        return $this;
    }

    /**
     * Get decipherScriptMiscModifier.
     *
     * @return int
     */
    public function getDecipherScriptMiscModifier()
    {
        return $this->decipher_script_misc_modifier;
    }

    /**
     * Set diplomacyRanks.
     *
     * @param int $diplomacyRanks
     *
     * @return CharacterSkills
     */
    public function setDiplomacyRanks($diplomacyRanks)
    {
        $this->diplomacy_ranks = $diplomacyRanks;

        return $this;
    }

    /**
     * Get diplomacyRanks.
     *
     * @return int
     */
    public function getDiplomacyRanks()
    {
        return $this->diplomacy_ranks;
    }

    /**
     * Set diplomacyMiscModifier.
     *
     * @param int $diplomacyMiscModifier
     *
     * @return CharacterSkills
     */
    public function setDiplomacyMiscModifier($diplomacyMiscModifier)
    {
        $this->diplomacy_misc_modifier = $diplomacyMiscModifier;

        return $this;
    }

    /**
     * Get diplomacyMiscModifier.
     *
     * @return int
     */
    public function getDiplomacyMiscModifier()
    {
        return $this->diplomacy_misc_modifier;
    }

    /**
     * Set disableDeviceRanks.
     *
     * @param int $disableDeviceRanks
     *
     * @return CharacterSkills
     */
    public function setDisableDeviceRanks($disableDeviceRanks)
    {
        $this->disable_device_ranks = $disableDeviceRanks;

        return $this;
    }

    /**
     * Get disableDeviceRanks.
     *
     * @return int
     */
    public function getDisableDeviceRanks()
    {
        return $this->disable_device_ranks;
    }

    /**
     * Set disableDeviceMiscModifier.
     *
     * @param int $disableDeviceMiscModifier
     *
     * @return CharacterSkills
     */
    public function setDisableDeviceMiscModifier($disableDeviceMiscModifier)
    {
        $this->disable_device_misc_modifier = $disableDeviceMiscModifier;

        return $this;
    }

    /**
     * Get disableDeviceMiscModifier.
     *
     * @return int
     */
    public function getDisableDeviceMiscModifier()
    {
        return $this->disable_device_misc_modifier;
    }

    /**
     * Set disguiseRanks.
     *
     * @param int $disguiseRanks
     *
     * @return CharacterSkills
     */
    public function setDisguiseRanks($disguiseRanks)
    {
        $this->disguise_ranks = $disguiseRanks;

        return $this;
    }

    /**
     * Get disguiseRanks.
     *
     * @return int
     */
    public function getDisguiseRanks()
    {
        return $this->disguise_ranks;
    }

    /**
     * Set disguiseMiscModifier.
     *
     * @param int $disguiseMiscModifier
     *
     * @return CharacterSkills
     */
    public function setDisguiseMiscModifier($disguiseMiscModifier)
    {
        $this->disguise_misc_modifier = $disguiseMiscModifier;

        return $this;
    }

    /**
     * Get disguiseMiscModifier.
     *
     * @return int
     */
    public function getDisguiseMiscModifier()
    {
        return $this->disguise_misc_modifier;
    }

    /**
     * Set escapeArtistRanks.
     *
     * @param int $escapeArtistRanks
     *
     * @return CharacterSkills
     */
    public function setEscapeArtistRanks($escapeArtistRanks)
    {
        $this->escape_artist_ranks = $escapeArtistRanks;

        return $this;
    }

    /**
     * Get escapeArtistRanks.
     *
     * @return int
     */
    public function getEscapeArtistRanks()
    {
        return $this->escape_artist_ranks;
    }

    /**
     * Set escapeArtistMiscModifier.
     *
     * @param int $escapeArtistMiscModifier
     *
     * @return CharacterSkills
     */
    public function setEscapeArtistMiscModifier($escapeArtistMiscModifier)
    {
        $this->escape_artist_misc_modifier = $escapeArtistMiscModifier;

        return $this;
    }

    /**
     * Get escapeArtistMiscModifier.
     *
     * @return int
     */
    public function getEscapeArtistMiscModifier()
    {
        return $this->escape_artist_misc_modifier;
    }

    /**
     * Set forgeryRanks.
     *
     * @param int $forgeryRanks
     *
     * @return CharacterSkills
     */
    public function setForgeryRanks($forgeryRanks)
    {
        $this->forgery_ranks = $forgeryRanks;

        return $this;
    }

    /**
     * Get forgeryRanks.
     *
     * @return int
     */
    public function getForgeryRanks()
    {
        return $this->forgery_ranks;
    }

    /**
     * Set forgeryMiscModifier.
     *
     * @param int $forgeryMiscModifier
     *
     * @return CharacterSkills
     */
    public function setForgeryMiscModifier($forgeryMiscModifier)
    {
        $this->forgery_misc_modifier = $forgeryMiscModifier;

        return $this;
    }

    /**
     * Get forgeryMiscModifier.
     *
     * @return int
     */
    public function getForgeryMiscModifier()
    {
        return $this->forgery_misc_modifier;
    }

    /**
     * Set gatherInformationRanks.
     *
     * @param int $gatherInformationRanks
     *
     * @return CharacterSkills
     */
    public function setGatherInformationRanks($gatherInformationRanks)
    {
        $this->gather_information_ranks = $gatherInformationRanks;

        return $this;
    }

    /**
     * Get gatherInformationRanks.
     *
     * @return int
     */
    public function getGatherInformationRanks()
    {
        return $this->gather_information_ranks;
    }

    /**
     * Set gatherInformationMiscModifier.
     *
     * @param int $gatherInformationMiscModifier
     *
     * @return CharacterSkills
     */
    public function setGatherInformationMiscModifier($gatherInformationMiscModifier)
    {
        $this->gather_information_misc_modifier = $gatherInformationMiscModifier;

        return $this;
    }

    /**
     * Get gatherInformationMiscModifier.
     *
     * @return int
     */
    public function getGatherInformationMiscModifier()
    {
        return $this->gather_information_misc_modifier;
    }

    /**
     * Set handleAnimalsRanks.
     *
     * @param int $handleAnimalsRanks
     *
     * @return CharacterSkills
     */
    public function setHandleAnimalsRanks($handleAnimalsRanks)
    {
        $this->handle_animals_ranks = $handleAnimalsRanks;

        return $this;
    }

    /**
     * Get handleAnimalsRanks.
     *
     * @return int
     */
    public function getHandleAnimalsRanks()
    {
        return $this->handle_animals_ranks;
    }

    /**
     * Set handleAnimalsMiscModifier.
     *
     * @param int $handleAnimalsMiscModifier
     *
     * @return CharacterSkills
     */
    public function setHandleAnimalsMiscModifier($handleAnimalsMiscModifier)
    {
        $this->handle_animals_misc_modifier = $handleAnimalsMiscModifier;

        return $this;
    }

    /**
     * Get handleAnimalsMiscModifier.
     *
     * @return int
     */
    public function getHandleAnimalsMiscModifier()
    {
        return $this->handle_animals_misc_modifier;
    }

    /**
     * Set healRanks.
     *
     * @param int $healRanks
     *
     * @return CharacterSkills
     */
    public function setHealRanks($healRanks)
    {
        $this->heal_ranks = $healRanks;

        return $this;
    }

    /**
     * Get healRanks.
     *
     * @return int
     */
    public function getHealRanks()
    {
        return $this->heal_ranks;
    }

    /**
     * Set healMiscModifier.
     *
     * @param int $healMiscModifier
     *
     * @return CharacterSkills
     */
    public function setHealMiscModifier($healMiscModifier)
    {
        $this->heal_misc_modifier = $healMiscModifier;

        return $this;
    }

    /**
     * Get healMiscModifier.
     *
     * @return int
     */
    public function getHealMiscModifier()
    {
        return $this->heal_misc_modifier;
    }

    /**
     * Set hideRanks.
     *
     * @param int $hideRanks
     *
     * @return CharacterSkills
     */
    public function setHideRanks($hideRanks)
    {
        $this->hide_ranks = $hideRanks;

        return $this;
    }

    /**
     * Get hideRanks.
     *
     * @return int
     */
    public function getHideRanks()
    {
        return $this->hide_ranks;
    }

    /**
     * Set hideMiscModifier.
     *
     * @param int $hideMiscModifier
     *
     * @return CharacterSkills
     */
    public function setHideMiscModifier($hideMiscModifier)
    {
        $this->hide_misc_modifier = $hideMiscModifier;

        return $this;
    }

    /**
     * Get hideMiscModifier.
     *
     * @return int
     */
    public function getHideMiscModifier()
    {
        return $this->hide_misc_modifier;
    }

    /**
     * Set intimidateRanks.
     *
     * @param int $intimidateRanks
     *
     * @return CharacterSkills
     */
    public function setIntimidateRanks($intimidateRanks)
    {
        $this->intimidate_ranks = $intimidateRanks;

        return $this;
    }

    /**
     * Get intimidateRanks.
     *
     * @return int
     */
    public function getIntimidateRanks()
    {
        return $this->intimidate_ranks;
    }

    /**
     * Set intimidateMiscModifier.
     *
     * @param int $intimidateMiscModifier
     *
     * @return CharacterSkills
     */
    public function setIntimidateMiscModifier($intimidateMiscModifier)
    {
        $this->intimidate_misc_modifier = $intimidateMiscModifier;

        return $this;
    }

    /**
     * Get intimidateMiscModifier.
     *
     * @return int
     */
    public function getIntimidateMiscModifier()
    {
        return $this->intimidate_misc_modifier;
    }

    /**
     * Set jumpRanks.
     *
     * @param int $jumpRanks
     *
     * @return CharacterSkills
     */
    public function setJumpRanks($jumpRanks)
    {
        $this->jump_ranks = $jumpRanks;

        return $this;
    }

    /**
     * Get jumpRanks.
     *
     * @return int
     */
    public function getJumpRanks()
    {
        return $this->jump_ranks;
    }

    /**
     * Set jumpMiscModifier.
     *
     * @param int $jumpMiscModifier
     *
     * @return CharacterSkills
     */
    public function setJumpMiscModifier($jumpMiscModifier)
    {
        $this->jump_misc_modifier = $jumpMiscModifier;

        return $this;
    }

    /**
     * Get jumpMiscModifier.
     *
     * @return int
     */
    public function getJumpMiscModifier()
    {
        return $this->jump_misc_modifier;
    }

    /**
     * Set knowledgeRanks.
     *
     * @param int $knowledgeRanks
     *
     * @return CharacterSkills
     */
    public function setKnowledgeRanks($knowledgeRanks)
    {
        $this->knowledge_ranks = $knowledgeRanks;

        return $this;
    }

    /**
     * Get knowledgeRanks.
     *
     * @return int
     */
    public function getKnowledgeRanks()
    {
        return $this->knowledge_ranks;
    }

    /**
     * Set knowledgeMiscModifier.
     *
     * @param int $knowledgeMiscModifier
     *
     * @return CharacterSkills
     */
    public function setKnowledgeMiscModifier($knowledgeMiscModifier)
    {
        $this->knowledge_misc_modifier = $knowledgeMiscModifier;

        return $this;
    }

    /**
     * Get knowledgeMiscModifier.
     *
     * @return int
     */
    public function getKnowledgeMiscModifier()
    {
        return $this->knowledge_misc_modifier;
    }

    /**
     * Set listenRanks.
     *
     * @param int $listenRanks
     *
     * @return CharacterSkills
     */
    public function setListenRanks($listenRanks)
    {
        $this->listen_ranks = $listenRanks;

        return $this;
    }

    /**
     * Get listenRanks.
     *
     * @return int
     */
    public function getListenRanks()
    {
        return $this->listen_ranks;
    }

    /**
     * Set listenMiscModifier.
     *
     * @param int $listenMiscModifier
     *
     * @return CharacterSkills
     */
    public function setListenMiscModifier($listenMiscModifier)
    {
        $this->listen_misc_modifier = $listenMiscModifier;

        return $this;
    }

    /**
     * Get listenMiscModifier.
     *
     * @return int
     */
    public function getListenMiscModifier()
    {
        return $this->listen_misc_modifier;
    }

    /**
     * Set moveSilentlyRanks.
     *
     * @param int $moveSilentlyRanks
     *
     * @return CharacterSkills
     */
    public function setMoveSilentlyRanks($moveSilentlyRanks)
    {
        $this->move_silently_ranks = $moveSilentlyRanks;

        return $this;
    }

    /**
     * Get moveSilentlyRanks.
     *
     * @return int
     */
    public function getMoveSilentlyRanks()
    {
        return $this->move_silently_ranks;
    }

    /**
     * Set moveSilentlyMiscModifier.
     *
     * @param int $moveSilentlyMiscModifier
     *
     * @return CharacterSkills
     */
    public function setMoveSilentlyMiscModifier($moveSilentlyMiscModifier)
    {
        $this->move_silently_misc_modifier = $moveSilentlyMiscModifier;

        return $this;
    }

    /**
     * Get moveSilentlyMiscModifier.
     *
     * @return int
     */
    public function getMoveSilentlyMiscModifier()
    {
        return $this->move_silently_misc_modifier;
    }

    /**
     * Set openLockRanks.
     *
     * @param int $openLockRanks
     *
     * @return CharacterSkills
     */
    public function setOpenLockRanks($openLockRanks)
    {
        $this->open_lock_ranks = $openLockRanks;

        return $this;
    }

    /**
     * Get openLockRanks.
     *
     * @return int
     */
    public function getOpenLockRanks()
    {
        return $this->open_lock_ranks;
    }

    /**
     * Set openLockMiscModifier.
     *
     * @param int $openLockMiscModifier
     *
     * @return CharacterSkills
     */
    public function setOpenLockMiscModifier($openLockMiscModifier)
    {
        $this->open_lock_misc_modifier = $openLockMiscModifier;

        return $this;
    }

    /**
     * Get openLockMiscModifier.
     *
     * @return int
     */
    public function getOpenLockMiscModifier()
    {
        return $this->open_lock_misc_modifier;
    }

    /**
     * Set performRanks.
     *
     * @param int $performRanks
     *
     * @return CharacterSkills
     */
    public function setPerformRanks($performRanks)
    {
        $this->perform_ranks = $performRanks;

        return $this;
    }

    /**
     * Get performRanks.
     *
     * @return int
     */
    public function getPerformRanks()
    {
        return $this->perform_ranks;
    }

    /**
     * Set performMiscModifier.
     *
     * @param int $performMiscModifier
     *
     * @return CharacterSkills
     */
    public function setPerformMiscModifier($performMiscModifier)
    {
        $this->perform_misc_modifier = $performMiscModifier;

        return $this;
    }

    /**
     * Get performMiscModifier.
     *
     * @return int
     */
    public function getPerformMiscModifier()
    {
        return $this->perform_misc_modifier;
    }

    /**
     * Set professionRanks.
     *
     * @param int $professionRanks
     *
     * @return CharacterSkills
     */
    public function setProfessionRanks($professionRanks)
    {
        $this->profession_ranks = $professionRanks;

        return $this;
    }

    /**
     * Get professionRanks.
     *
     * @return int
     */
    public function getProfessionRanks()
    {
        return $this->profession_ranks;
    }

    /**
     * Set professionMiscModifier.
     *
     * @param int $professionMiscModifier
     *
     * @return CharacterSkills
     */
    public function setProfessionMiscModifier($professionMiscModifier)
    {
        $this->profession_misc_modifier = $professionMiscModifier;

        return $this;
    }

    /**
     * Get professionMiscModifier.
     *
     * @return int
     */
    public function getProfessionMiscModifier()
    {
        return $this->profession_misc_modifier;
    }

    /**
     * Set rideRanks.
     *
     * @param int $rideRanks
     *
     * @return CharacterSkills
     */
    public function setRideRanks($rideRanks)
    {
        $this->ride_ranks = $rideRanks;

        return $this;
    }

    /**
     * Get rideRanks.
     *
     * @return int
     */
    public function getRideRanks()
    {
        return $this->ride_ranks;
    }

    /**
     * Set rideMiscModifier.
     *
     * @param int $rideMiscModifier
     *
     * @return CharacterSkills
     */
    public function setRideMiscModifier($rideMiscModifier)
    {
        $this->ride_misc_modifier = $rideMiscModifier;

        return $this;
    }

    /**
     * Get rideMiscModifier.
     *
     * @return int
     */
    public function getRideMiscModifier()
    {
        return $this->ride_misc_modifier;
    }

    /**
     * Set searchRanks.
     *
     * @param int $searchRanks
     *
     * @return CharacterSkills
     */
    public function setSearchRanks($searchRanks)
    {
        $this->search_ranks = $searchRanks;

        return $this;
    }

    /**
     * Get searchRanks.
     *
     * @return int
     */
    public function getSearchRanks()
    {
        return $this->search_ranks;
    }

    /**
     * Set searchMiscModifier.
     *
     * @param int $searchMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSearchMiscModifier($searchMiscModifier)
    {
        $this->search_misc_modifier = $searchMiscModifier;

        return $this;
    }

    /**
     * Get searchMiscModifier.
     *
     * @return int
     */
    public function getSearchMiscModifier()
    {
        return $this->search_misc_modifier;
    }

    /**
     * Set senseMotiveRanks.
     *
     * @param int $senseMotiveRanks
     *
     * @return CharacterSkills
     */
    public function setSenseMotiveRanks($senseMotiveRanks)
    {
        $this->sense_motive_ranks = $senseMotiveRanks;

        return $this;
    }

    /**
     * Get senseMotiveRanks.
     *
     * @return int
     */
    public function getSenseMotiveRanks()
    {
        return $this->sense_motive_ranks;
    }

    /**
     * Set senseMotiveMiscModifier.
     *
     * @param int $senseMotiveMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSenseMotiveMiscModifier($senseMotiveMiscModifier)
    {
        $this->sense_motive_misc_modifier = $senseMotiveMiscModifier;

        return $this;
    }

    /**
     * Get senseMotiveMiscModifier.
     *
     * @return int
     */
    public function getSenseMotiveMiscModifier()
    {
        return $this->sense_motive_misc_modifier;
    }

    /**
     * Set sleightOfHandRanks.
     *
     * @param int $sleightOfHandRanks
     *
     * @return CharacterSkills
     */
    public function setSleightOfHandRanks($sleightOfHandRanks)
    {
        $this->sleight_of_hand_ranks = $sleightOfHandRanks;

        return $this;
    }

    /**
     * Get sleightOfHandRanks.
     *
     * @return int
     */
    public function getSleightOfHandRanks()
    {
        return $this->sleight_of_hand_ranks;
    }

    /**
     * Set sleightOfHandMiscModifier.
     *
     * @param int $sleightOfHandMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSleightOfHandMiscModifier($sleightOfHandMiscModifier)
    {
        $this->sleight_of_hand_misc_modifier = $sleightOfHandMiscModifier;

        return $this;
    }

    /**
     * Get sleightOfHandMiscModifier.
     *
     * @return int
     */
    public function getSleightOfHandMiscModifier()
    {
        return $this->sleight_of_hand_misc_modifier;
    }

    /**
     * Set spellcraftRanks.
     *
     * @param int $spellcraftRanks
     *
     * @return CharacterSkills
     */
    public function setSpellcraftRanks($spellcraftRanks)
    {
        $this->spellcraft_ranks = $spellcraftRanks;

        return $this;
    }

    /**
     * Get spellcraftRanks.
     *
     * @return int
     */
    public function getSpellcraftRanks()
    {
        return $this->spellcraft_ranks;
    }

    /**
     * Set spellcraftMiscModifier.
     *
     * @param int $spellcraftMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSpellcraftMiscModifier($spellcraftMiscModifier)
    {
        $this->spellcraft_misc_modifier = $spellcraftMiscModifier;

        return $this;
    }

    /**
     * Get spellcraftMiscModifier.
     *
     * @return int
     */
    public function getSpellcraftMiscModifier()
    {
        return $this->spellcraft_misc_modifier;
    }

    /**
     * Set spotRanks.
     *
     * @param int $spotRanks
     *
     * @return CharacterSkills
     */
    public function setSpotRanks($spotRanks)
    {
        $this->spot_ranks = $spotRanks;

        return $this;
    }

    /**
     * Get spotRanks.
     *
     * @return int
     */
    public function getSpotRanks()
    {
        return $this->spot_ranks;
    }

    /**
     * Set spotMiscModifier.
     *
     * @param int $spotMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSpotMiscModifier($spotMiscModifier)
    {
        $this->spot_misc_modifier = $spotMiscModifier;

        return $this;
    }

    /**
     * Get spotMiscModifier.
     *
     * @return int
     */
    public function getSpotMiscModifier()
    {
        return $this->spot_misc_modifier;
    }

    /**
     * Set survivalRanks.
     *
     * @param int $survivalRanks
     *
     * @return CharacterSkills
     */
    public function setSurvivalRanks($survivalRanks)
    {
        $this->survival_ranks = $survivalRanks;

        return $this;
    }

    /**
     * Get survivalRanks.
     *
     * @return int
     */
    public function getSurvivalRanks()
    {
        return $this->survival_ranks;
    }

    /**
     * Set survivalMiscModifier.
     *
     * @param int $survivalMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSurvivalMiscModifier($survivalMiscModifier)
    {
        $this->survival_misc_modifier = $survivalMiscModifier;

        return $this;
    }

    /**
     * Get survivalMiscModifier.
     *
     * @return int
     */
    public function getSurvivalMiscModifier()
    {
        return $this->survival_misc_modifier;
    }

    /**
     * Set swimRanks.
     *
     * @param int $swimRanks
     *
     * @return CharacterSkills
     */
    public function setSwimRanks($swimRanks)
    {
        $this->swim_ranks = $swimRanks;

        return $this;
    }

    /**
     * Get swimRanks.
     *
     * @return int
     */
    public function getSwimRanks()
    {
        return $this->swim_ranks;
    }

    /**
     * Set swimMiscModifier.
     *
     * @param int $swimMiscModifier
     *
     * @return CharacterSkills
     */
    public function setSwimMiscModifier($swimMiscModifier)
    {
        $this->swim_misc_modifier = $swimMiscModifier;

        return $this;
    }

    /**
     * Get swimMiscModifier.
     *
     * @return int
     */
    public function getSwimMiscModifier()
    {
        return $this->swim_misc_modifier;
    }

    /**
     * Set tumbleRanks.
     *
     * @param int $tumbleRanks
     *
     * @return CharacterSkills
     */
    public function setTumbleRanks($tumbleRanks)
    {
        $this->tumble_ranks = $tumbleRanks;

        return $this;
    }

    /**
     * Get tumbleRanks.
     *
     * @return int
     */
    public function getTumbleRanks()
    {
        return $this->tumble_ranks;
    }

    /**
     * Set tumbleMiscModifier.
     *
     * @param int $tumbleMiscModifier
     *
     * @return CharacterSkills
     */
    public function setTumbleMiscModifier($tumbleMiscModifier)
    {
        $this->tumble_misc_modifier = $tumbleMiscModifier;

        return $this;
    }

    /**
     * Get tumbleMiscModifier.
     *
     * @return int
     */
    public function getTumbleMiscModifier()
    {
        return $this->tumble_misc_modifier;
    }

    /**
     * Set useMagicDeviceRanks.
     *
     * @param int $useMagicDeviceRanks
     *
     * @return CharacterSkills
     */
    public function setUseMagicDeviceRanks($useMagicDeviceRanks)
    {
        $this->use_magic_device_ranks = $useMagicDeviceRanks;

        return $this;
    }

    /**
     * Get useMagicDeviceRanks.
     *
     * @return int
     */
    public function getUseMagicDeviceRanks()
    {
        return $this->use_magic_device_ranks;
    }

    /**
     * Set useMagicDeviceMiscModifier.
     *
     * @param int $useMagicDeviceMiscModifier
     *
     * @return CharacterSkills
     */
    public function setUseMagicDeviceMiscModifier($useMagicDeviceMiscModifier)
    {
        $this->use_magic_device_misc_modifier = $useMagicDeviceMiscModifier;

        return $this;
    }

    /**
     * Get useMagicDeviceMiscModifier.
     *
     * @return int
     */
    public function getUseMagicDeviceMiscModifier()
    {
        return $this->use_magic_device_misc_modifier;
    }

    /**
     * Set useRanks.
     *
     * @param int $useRanks
     *
     * @return CharacterSkills
     */
    public function setUseRanks($useRanks)
    {
        $this->use_ranks = $useRanks;

        return $this;
    }

    /**
     * Get useRanks.
     *
     * @return int
     */
    public function getUseRanks()
    {
        return $this->use_ranks;
    }

    /**
     * Set useMiscModifier.
     *
     * @param int $useMiscModifier
     *
     * @return CharacterSkills
     */
    public function setUseMiscModifier($useMiscModifier)
    {
        $this->use_misc_modifier = $useMiscModifier;

        return $this;
    }

    /**
     * Get useMiscModifier.
     *
     * @return int
     */
    public function getUseMiscModifier()
    {
        return $this->use_misc_modifier;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return CharacterSkills
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
