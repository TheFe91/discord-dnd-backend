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
    public function getId()
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
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return SpecialAbilities
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
