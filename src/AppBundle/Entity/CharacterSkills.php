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
    public function getId()
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
    public function setRanks($ranks)
    {
        $this->ranks = $ranks;

        return $this;
    }

    /**
     * Get ranks.
     *
     * @return int
     */
    public function getRanks()
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
    public function setMiscModifier($miscModifier)
    {
        $this->misc_modifier = $miscModifier;

        return $this;
    }

    /**
     * Get miscModifier.
     *
     * @return int
     */
    public function getMiscModifier()
    {
        return $this->misc_modifier;
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

    /**
     * Set skill.
     *
     * @param \AppBundle\Entity\Skills|null $skill
     *
     * @return CharacterSkills
     */
    public function setSkill(\AppBundle\Entity\Skills $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill.
     *
     * @return \AppBundle\Entity\Skills|null
     */
    public function getSkill()
    {
        return $this->skill;
    }
}
