<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 *
 * @ORM\Table(name="characters")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharactersRepository")
 */
class Characters
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
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=50)
     */
    private $player;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Races")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $race;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Classes")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $class;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $size;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=1)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $eyes;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $hair;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $skin;



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
     * @return Characters
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
     * Set player.
     *
     * @param string $player
     *
     * @return Characters
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player.
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set level.
     *
     * @param int $level
     *
     * @return Characters
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set size.
     *
     * @param string $size
     *
     * @return Characters
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set age.
     *
     * @param int $age
     *
     * @return Characters
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender.
     *
     * @param string $gender
     *
     * @return Characters
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set height.
     *
     * @param int $height
     *
     * @return Characters
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight.
     *
     * @param int $weight
     *
     * @return Characters
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
     * Set eyes.
     *
     * @param string $eyes
     *
     * @return Characters
     */
    public function setEyes($eyes)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get eyes.
     *
     * @return string
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set hair.
     *
     * @param string $hair
     *
     * @return Characters
     */
    public function setHair($hair)
    {
        $this->hair = $hair;

        return $this;
    }

    /**
     * Get hair.
     *
     * @return string
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * Set skin.
     *
     * @param string $skin
     *
     * @return Characters
     */
    public function setSkin($skin)
    {
        $this->skin = $skin;

        return $this;
    }

    /**
     * Get skin.
     *
     * @return string
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set race.
     *
     * @param \AppBundle\Entity\Races|null $race
     *
     * @return Characters
     */
    public function setRace(\AppBundle\Entity\Races $race = null)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race.
     *
     * @return \AppBundle\Entity\Races|null
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class.
     *
     * @param \AppBundle\Entity\Classes|null $class
     *
     * @return Characters
     */
    public function setClass(\AppBundle\Entity\Classes $class = null)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class.
     *
     * @return \AppBundle\Entity\Classes|null
     */
    public function getClass()
    {
        return $this->class;
    }
}
