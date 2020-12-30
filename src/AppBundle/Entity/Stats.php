<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
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
    private $strength;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $dexterity;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $constitution;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intelligence;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $wisdom;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $charisma;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $strength_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $dexterity_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $constitution_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $intelligence_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $wisdom_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $charisma_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $experience_points;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $hit_points;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $armor_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $shield_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $size_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $natural_armor;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $deflection_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $ac_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $damage_reduction;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $speed;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $initiative_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $fortitude_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $reflex_temp_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_base_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_magic_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $will_temp_modifier;

    /**
     * @var array
     *
     * @ORM\Column(type="simple_array")
     */
    private $base_attack_bonus;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_resistance;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $grapple_misc_modifier;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $spell_save;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $arcane_spell_failure;


}
