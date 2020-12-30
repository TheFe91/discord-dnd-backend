<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spells
 *
 * @ORM\Table(name="spells")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpellsRepository")
 */
class Spells
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
    private $spell;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $level;


}
