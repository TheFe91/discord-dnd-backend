<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialAbilities
 *
 * @ORM\Table(name="special_abilities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecialAbilitiesRepository")
 */
class SpecialAbilities
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
     * @ORM\Column(type="string", length=100)
     */
    private $name;



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
     * Set name.
     *
     * @param string $name
     *
     * @return SpecialAbilities
     */
    public function setName(string $name): SpecialAbilities
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set character.
     *
     * @param Characters|null $character
     *
     * @return SpecialAbilities
     */
    public function setCharacter(Characters $character = null): SpecialAbilities
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
}
