<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weapons
 *
 * @ORM\Table(name="weapons")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeaponsRepository")
 */
class Weapons
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
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $attack_bonus;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $damage;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $critical;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $weapon_range;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(type="integer")
     */
    private $ammunitions;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $modifier_is_strength = true;



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
     * @return Weapons
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
     * Set attackBonus.
     *
     * @param string|null $attackBonus
     *
     * @return Weapons
     */
    public function setAttackBonus($attackBonus = null)
    {
        $this->attack_bonus = $attackBonus;

        return $this;
    }

    /**
     * Get attackBonus.
     *
     * @return string|null
     */
    public function getAttackBonus()
    {
        return $this->attack_bonus;
    }

    /**
     * Set damage.
     *
     * @param string $damage
     *
     * @return Weapons
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage.
     *
     * @return string
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set critical.
     *
     * @param string|null $critical
     *
     * @return Weapons
     */
    public function setCritical($critical = null)
    {
        $this->critical = $critical;

        return $this;
    }

    /**
     * Get critical.
     *
     * @return string|null
     */
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Set weaponRange.
     *
     * @param string|null $weaponRange
     *
     * @return Weapons
     */
    public function setWeaponRange($weaponRange = null)
    {
        $this->weapon_range = $weaponRange;

        return $this;
    }

    /**
     * Get weaponRange.
     *
     * @return string|null
     */
    public function getWeaponRange()
    {
        return $this->weapon_range;
    }

    /**
     * Set type.
     *
     * @param string|null $type
     *
     * @return Weapons
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set notes.
     *
     * @param string|null $notes
     *
     * @return Weapons
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return Weapons
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
     * Set ammunitions.
     *
     * @param int $ammunitions
     *
     * @return Weapons
     */
    public function setAmmunitions($ammunitions)
    {
        $this->ammunitions = $ammunitions;

        return $this;
    }

    /**
     * Get ammunitions.
     *
     * @return int
     */
    public function getAmmunitions()
    {
        return $this->ammunitions;
    }

    /**
     * Set modifierIsStrength.
     *
     * @param bool $modifierIsStrength
     *
     * @return Weapons
     */
    public function setModifierIsStrength($modifierIsStrength)
    {
        $this->modifier_is_strength = $modifierIsStrength;

        return $this;
    }

    /**
     * Get modifierIsStrength.
     *
     * @return bool
     */
    public function getModifierIsStrength()
    {
        return $this->modifier_is_strength;
    }
}
