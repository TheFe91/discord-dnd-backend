<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DailySpells
 *
 * @ORM\Table(name="daily_spells")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DailySpellsRepository")
 */
class DailySpells
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="known_spells_0", type="integer")
     */
    private $known_spells_0;

    /**
     * @var int
     *
     * @ORM\Column(name="spell_save_dc", type="integer")
     */
    private $spell_save_dc_0;

    /**
     * @var int
     *
     * @ORM\Column(name="spells_per_day", type="integer")
     */
    private $spells_per_day_0;

    /**
     * @var int
     *
     * @ORM\Column(name="bonus_spell_1", type="integer")
     */
    private $bonus_spells_1;


}
