<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gear.twig
 *
 * @ORM\Table(name="gear")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GearRepository")
 */
class Gear
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
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ac_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max_dex;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $check_penalty;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spell_failure;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weight;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $special_properties;


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
     * Set name.
     *
     * @param string $name
     *
     * @return Gear
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
     * Set type.
     *
     * @param string $type
     *
     * @return Gear
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set acBonus.
     *
     * @param int $acBonus
     *
     * @return Gear
     */
    public function setAcBonus($acBonus)
    {
        $this->ac_bonus = $acBonus;

        return $this;
    }

    /**
     * Get acBonus.
     *
     * @return int
     */
    public function getAcBonus()
    {
        return $this->ac_bonus;
    }

    /**
     * Set maxDex.
     *
     * @param int $maxDex
     *
     * @return Gear
     */
    public function setMaxDex($maxDex)
    {
        $this->max_dex = $maxDex;

        return $this;
    }

    /**
     * Get maxDex.
     *
     * @return int
     */
    public function getMaxDex()
    {
        return $this->max_dex;
    }

    /**
     * Set checkPenalty.
     *
     * @param int|null $checkPenalty
     *
     * @return Gear
     */
    public function setCheckPenalty($checkPenalty = null)
    {
        $this->check_penalty = $checkPenalty;

        return $this;
    }

    /**
     * Get checkPenalty.
     *
     * @return int|null
     */
    public function getCheckPenalty()
    {
        return $this->check_penalty;
    }

    /**
     * Set spellFailure.
     *
     * @param int|null $spellFailure
     *
     * @return Gear
     */
    public function setSpellFailure($spellFailure = null)
    {
        $this->spell_failure = $spellFailure;

        return $this;
    }

    /**
     * Get spellFailure.
     *
     * @return int|null
     */
    public function getSpellFailure()
    {
        return $this->spell_failure;
    }

    /**
     * Set speed.
     *
     * @param int|null $speed
     *
     * @return Gear
     */
    public function setSpeed($speed = null)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed.
     *
     * @return int|null
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set weight.
     *
     * @param int $weight
     *
     * @return Gear
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight.
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set specialProperties.
     *
     * @param string|null $specialProperties
     *
     * @return Gear
     */
    public function setSpecialProperties($specialProperties = null)
    {
        $this->special_properties = $specialProperties;

        return $this;
    }

    /**
     * Get specialProperties.
     *
     * @return string|null
     */
    public function getSpecialProperties()
    {
        return $this->special_properties;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return Gear
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
