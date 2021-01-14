<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LanguagesRepository")
 */
class Languages
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
     * @ORM\Column(type="string", length=20)
     */
    private $language;



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
     * Set language.
     *
     * @param string $language
     *
     * @return Languages
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return Languages
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
