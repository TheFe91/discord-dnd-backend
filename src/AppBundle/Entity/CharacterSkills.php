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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Skills")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $skill;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ranks = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $misc_modifier = 0;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set ranks.
     *
     * @param int $ranks
     *
     * @return CharacterSkills
     */
    public function setRanks($ranks): CharacterSkills
    {
        $this->ranks = $ranks;

        return $this;
    }

    /**
     * Get ranks.
     *
     * @return int
     */
    public function getRanks(): int
    {
        return $this->ranks;
    }

    /**
     * Set miscModifier.
     *
     * @param int $miscModifier
     *
     * @return CharacterSkills
     */
    public function setMiscModifier($miscModifier): CharacterSkills
    {
        $this->misc_modifier = $miscModifier;

        return $this;
    }

    /**
     * Get miscModifier.
     *
     * @return int
     */
    public function getMiscModifier(): int
    {
        return $this->misc_modifier;
    }

    /**
     * Set character.
     *
     * @param Characters|null $character
     *
     * @return CharacterSkills
     */
    public function setCharacter(Characters $character = null): CharacterSkills
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character.
     *
     * @return Characters|null
     */
    public function getCharacter(): ?Characters
    {
        return $this->character;
    }

    /**
     * Set skill.
     *
     * @param Skills|null $skill
     *
     * @return CharacterSkills
     */
    public function setSkill(Skills $skill = null): CharacterSkills
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill.
     *
     * @return Skills|null
     */
    public function getSkill(): ?Skills
    {
        return $this->skill;
    }
}
