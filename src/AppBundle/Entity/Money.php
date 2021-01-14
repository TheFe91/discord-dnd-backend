<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Money
 *
 * @ORM\Table(name="money")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoneyRepository")
 */
class Money
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
    private $copper_piece;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $silver_piece;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $gold_piece;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $platinum_piece;



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
     * Set copperPiece.
     *
     * @param int $copperPiece
     *
     * @return Money
     */
    public function setCopperPiece($copperPiece)
    {
        $this->copper_piece = $copperPiece;

        return $this;
    }

    /**
     * Get copperPiece.
     *
     * @return int
     */
    public function getCopperPiece()
    {
        return $this->copper_piece;
    }

    /**
     * Set silverPiece.
     *
     * @param int $silverPiece
     *
     * @return Money
     */
    public function setSilverPiece($silverPiece)
    {
        $this->silver_piece = $silverPiece;

        return $this;
    }

    /**
     * Get silverPiece.
     *
     * @return int
     */
    public function getSilverPiece()
    {
        return $this->silver_piece;
    }

    /**
     * Set goldPiece.
     *
     * @param int $goldPiece
     *
     * @return Money
     */
    public function setGoldPiece($goldPiece)
    {
        $this->gold_piece = $goldPiece;

        return $this;
    }

    /**
     * Get goldPiece.
     *
     * @return int
     */
    public function getGoldPiece()
    {
        return $this->gold_piece;
    }

    /**
     * Set platinumPiece.
     *
     * @param int $platinumPiece
     *
     * @return Money
     */
    public function setPlatinumPiece($platinumPiece)
    {
        $this->platinum_piece = $platinumPiece;

        return $this;
    }

    /**
     * Get platinumPiece.
     *
     * @return int
     */
    public function getPlatinumPiece()
    {
        return $this->platinum_piece;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return Money
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
