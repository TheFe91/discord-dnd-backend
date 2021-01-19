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
    private $spells_known_0 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_0 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_0 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_1 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_2 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_3 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_4 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_4 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_4 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_4 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_5 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_5 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_5 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_5 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_6 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_6 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_6 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_6 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_7 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_7 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_7 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_7 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_8 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_8 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_8 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_8 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_known_9 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spell_save_dc_9 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $spells_per_day_9 = 0;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $bonus_spells_9 = 0;




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
     * Set spellsKnown0.
     *
     * @param int $spellsKnown0
     *
     * @return DailySpells
     */
    public function setSpellsKnown0($spellsKnown0)
    {
        $this->spells_known_0 = $spellsKnown0;

        return $this;
    }

    /**
     * Get spellsKnown0.
     *
     * @return int
     */
    public function getSpellsKnown0()
    {
        return $this->spells_known_0;
    }

    /**
     * Set spellSaveDc0.
     *
     * @param int $spellSaveDc0
     *
     * @return DailySpells
     */
    public function setSpellSaveDc0($spellSaveDc0)
    {
        $this->spell_save_dc_0 = $spellSaveDc0;

        return $this;
    }

    /**
     * Get spellSaveDc0.
     *
     * @return int
     */
    public function getSpellSaveDc0()
    {
        return $this->spell_save_dc_0;
    }

    /**
     * Set spellsPerDay0.
     *
     * @param int $spellsPerDay0
     *
     * @return DailySpells
     */
    public function setSpellsPerDay0($spellsPerDay0)
    {
        $this->spells_per_day_0 = $spellsPerDay0;

        return $this;
    }

    /**
     * Get spellsPerDay0.
     *
     * @return int
     */
    public function getSpellsPerDay0()
    {
        return $this->spells_per_day_0;
    }

    /**
     * Set spellsKnown1.
     *
     * @param int $spellsKnown1
     *
     * @return DailySpells
     */
    public function setSpellsKnown1($spellsKnown1)
    {
        $this->spells_known_1 = $spellsKnown1;

        return $this;
    }

    /**
     * Get spellsKnown1.
     *
     * @return int
     */
    public function getSpellsKnown1()
    {
        return $this->spells_known_1;
    }

    /**
     * Set spellSaveDc1.
     *
     * @param int $spellSaveDc1
     *
     * @return DailySpells
     */
    public function setSpellSaveDc1($spellSaveDc1)
    {
        $this->spell_save_dc_1 = $spellSaveDc1;

        return $this;
    }

    /**
     * Get spellSaveDc1.
     *
     * @return int
     */
    public function getSpellSaveDc1()
    {
        return $this->spell_save_dc_1;
    }

    /**
     * Set spellsPerDay1.
     *
     * @param int $spellsPerDay1
     *
     * @return DailySpells
     */
    public function setSpellsPerDay1($spellsPerDay1)
    {
        $this->spells_per_day_1 = $spellsPerDay1;

        return $this;
    }

    /**
     * Get spellsPerDay1.
     *
     * @return int
     */
    public function getSpellsPerDay1()
    {
        return $this->spells_per_day_1;
    }

    /**
     * Set bonusSpells1.
     *
     * @param int $bonusSpells1
     *
     * @return DailySpells
     */
    public function setBonusSpells1($bonusSpells1)
    {
        $this->bonus_spells_1 = $bonusSpells1;

        return $this;
    }

    /**
     * Get bonusSpells1.
     *
     * @return int
     */
    public function getBonusSpells1()
    {
        return $this->bonus_spells_1;
    }

    /**
     * Set spellsKnown2.
     *
     * @param int $spellsKnown2
     *
     * @return DailySpells
     */
    public function setSpellsKnown2($spellsKnown2)
    {
        $this->spells_known_2 = $spellsKnown2;

        return $this;
    }

    /**
     * Get spellsKnown2.
     *
     * @return int
     */
    public function getSpellsKnown2()
    {
        return $this->spells_known_2;
    }

    /**
     * Set spellSaveDc2.
     *
     * @param int $spellSaveDc2
     *
     * @return DailySpells
     */
    public function setSpellSaveDc2($spellSaveDc2)
    {
        $this->spell_save_dc_2 = $spellSaveDc2;

        return $this;
    }

    /**
     * Get spellSaveDc2.
     *
     * @return int
     */
    public function getSpellSaveDc2()
    {
        return $this->spell_save_dc_2;
    }

    /**
     * Set spellsPerDay2.
     *
     * @param int $spellsPerDay2
     *
     * @return DailySpells
     */
    public function setSpellsPerDay2($spellsPerDay2)
    {
        $this->spells_per_day_2 = $spellsPerDay2;

        return $this;
    }

    /**
     * Get spellsPerDay2.
     *
     * @return int
     */
    public function getSpellsPerDay2()
    {
        return $this->spells_per_day_2;
    }

    /**
     * Set bonusSpells2.
     *
     * @param int $bonusSpells2
     *
     * @return DailySpells
     */
    public function setBonusSpells2($bonusSpells2)
    {
        $this->bonus_spells_2 = $bonusSpells2;

        return $this;
    }

    /**
     * Get bonusSpells2.
     *
     * @return int
     */
    public function getBonusSpells2()
    {
        return $this->bonus_spells_2;
    }

    /**
     * Set spellsKnown3.
     *
     * @param int $spellsKnown3
     *
     * @return DailySpells
     */
    public function setSpellsKnown3($spellsKnown3)
    {
        $this->spells_known_3 = $spellsKnown3;

        return $this;
    }

    /**
     * Get spellsKnown3.
     *
     * @return int
     */
    public function getSpellsKnown3()
    {
        return $this->spells_known_3;
    }

    /**
     * Set spellSaveDc3.
     *
     * @param int $spellSaveDc3
     *
     * @return DailySpells
     */
    public function setSpellSaveDc3($spellSaveDc3)
    {
        $this->spell_save_dc_3 = $spellSaveDc3;

        return $this;
    }

    /**
     * Get spellSaveDc3.
     *
     * @return int
     */
    public function getSpellSaveDc3()
    {
        return $this->spell_save_dc_3;
    }

    /**
     * Set spellsPerDay3.
     *
     * @param int $spellsPerDay3
     *
     * @return DailySpells
     */
    public function setSpellsPerDay3($spellsPerDay3)
    {
        $this->spells_per_day_3 = $spellsPerDay3;

        return $this;
    }

    /**
     * Get spellsPerDay3.
     *
     * @return int
     */
    public function getSpellsPerDay3()
    {
        return $this->spells_per_day_3;
    }

    /**
     * Set bonusSpells3.
     *
     * @param int $bonusSpells3
     *
     * @return DailySpells
     */
    public function setBonusSpells3($bonusSpells3)
    {
        $this->bonus_spells_3 = $bonusSpells3;

        return $this;
    }

    /**
     * Get bonusSpells3.
     *
     * @return int
     */
    public function getBonusSpells3()
    {
        return $this->bonus_spells_3;
    }

    /**
     * Set spellsKnown4.
     *
     * @param int $spellsKnown4
     *
     * @return DailySpells
     */
    public function setSpellsKnown4($spellsKnown4)
    {
        $this->spells_known_4 = $spellsKnown4;

        return $this;
    }

    /**
     * Get spellsKnown4.
     *
     * @return int
     */
    public function getSpellsKnown4()
    {
        return $this->spells_known_4;
    }

    /**
     * Set spellSaveDc4.
     *
     * @param int $spellSaveDc4
     *
     * @return DailySpells
     */
    public function setSpellSaveDc4($spellSaveDc4)
    {
        $this->spell_save_dc_4 = $spellSaveDc4;

        return $this;
    }

    /**
     * Get spellSaveDc4.
     *
     * @return int
     */
    public function getSpellSaveDc4()
    {
        return $this->spell_save_dc_4;
    }

    /**
     * Set spellsPerDay4.
     *
     * @param int $spellsPerDay4
     *
     * @return DailySpells
     */
    public function setSpellsPerDay4($spellsPerDay4)
    {
        $this->spells_per_day_4 = $spellsPerDay4;

        return $this;
    }

    /**
     * Get spellsPerDay4.
     *
     * @return int
     */
    public function getSpellsPerDay4()
    {
        return $this->spells_per_day_4;
    }

    /**
     * Set bonusSpells4.
     *
     * @param int $bonusSpells4
     *
     * @return DailySpells
     */
    public function setBonusSpells4($bonusSpells4)
    {
        $this->bonus_spells_4 = $bonusSpells4;

        return $this;
    }

    /**
     * Get bonusSpells4.
     *
     * @return int
     */
    public function getBonusSpells4()
    {
        return $this->bonus_spells_4;
    }

    /**
     * Set spellsKnown5.
     *
     * @param int $spellsKnown5
     *
     * @return DailySpells
     */
    public function setSpellsKnown5($spellsKnown5)
    {
        $this->spells_known_5 = $spellsKnown5;

        return $this;
    }

    /**
     * Get spellsKnown5.
     *
     * @return int
     */
    public function getSpellsKnown5()
    {
        return $this->spells_known_5;
    }

    /**
     * Set spellSaveDc5.
     *
     * @param int $spellSaveDc5
     *
     * @return DailySpells
     */
    public function setSpellSaveDc5($spellSaveDc5)
    {
        $this->spell_save_dc_5 = $spellSaveDc5;

        return $this;
    }

    /**
     * Get spellSaveDc5.
     *
     * @return int
     */
    public function getSpellSaveDc5()
    {
        return $this->spell_save_dc_5;
    }

    /**
     * Set spellsPerDay5.
     *
     * @param int $spellsPerDay5
     *
     * @return DailySpells
     */
    public function setSpellsPerDay5($spellsPerDay5)
    {
        $this->spells_per_day_5 = $spellsPerDay5;

        return $this;
    }

    /**
     * Get spellsPerDay5.
     *
     * @return int
     */
    public function getSpellsPerDay5()
    {
        return $this->spells_per_day_5;
    }

    /**
     * Set bonusSpells5.
     *
     * @param int $bonusSpells5
     *
     * @return DailySpells
     */
    public function setBonusSpells5($bonusSpells5)
    {
        $this->bonus_spells_5 = $bonusSpells5;

        return $this;
    }

    /**
     * Get bonusSpells5.
     *
     * @return int
     */
    public function getBonusSpells5()
    {
        return $this->bonus_spells_5;
    }

    /**
     * Set spellsKnown6.
     *
     * @param int $spellsKnown6
     *
     * @return DailySpells
     */
    public function setSpellsKnown6($spellsKnown6)
    {
        $this->spells_known_6 = $spellsKnown6;

        return $this;
    }

    /**
     * Get spellsKnown6.
     *
     * @return int
     */
    public function getSpellsKnown6()
    {
        return $this->spells_known_6;
    }

    /**
     * Set spellSaveDc6.
     *
     * @param int $spellSaveDc6
     *
     * @return DailySpells
     */
    public function setSpellSaveDc6($spellSaveDc6)
    {
        $this->spell_save_dc_6 = $spellSaveDc6;

        return $this;
    }

    /**
     * Get spellSaveDc6.
     *
     * @return int
     */
    public function getSpellSaveDc6()
    {
        return $this->spell_save_dc_6;
    }

    /**
     * Set spellsPerDay6.
     *
     * @param int $spellsPerDay6
     *
     * @return DailySpells
     */
    public function setSpellsPerDay6($spellsPerDay6)
    {
        $this->spells_per_day_6 = $spellsPerDay6;

        return $this;
    }

    /**
     * Get spellsPerDay6.
     *
     * @return int
     */
    public function getSpellsPerDay6()
    {
        return $this->spells_per_day_6;
    }

    /**
     * Set bonusSpells6.
     *
     * @param int $bonusSpells6
     *
     * @return DailySpells
     */
    public function setBonusSpells6($bonusSpells6)
    {
        $this->bonus_spells_6 = $bonusSpells6;

        return $this;
    }

    /**
     * Get bonusSpells6.
     *
     * @return int
     */
    public function getBonusSpells6()
    {
        return $this->bonus_spells_6;
    }

    /**
     * Set spellsKnown7.
     *
     * @param int $spellsKnown7
     *
     * @return DailySpells
     */
    public function setSpellsKnown7($spellsKnown7)
    {
        $this->spells_known_7 = $spellsKnown7;

        return $this;
    }

    /**
     * Get spellsKnown7.
     *
     * @return int
     */
    public function getSpellsKnown7()
    {
        return $this->spells_known_7;
    }

    /**
     * Set spellSaveDc7.
     *
     * @param int $spellSaveDc7
     *
     * @return DailySpells
     */
    public function setSpellSaveDc7($spellSaveDc7)
    {
        $this->spell_save_dc_7 = $spellSaveDc7;

        return $this;
    }

    /**
     * Get spellSaveDc7.
     *
     * @return int
     */
    public function getSpellSaveDc7()
    {
        return $this->spell_save_dc_7;
    }

    /**
     * Set spellsPerDay7.
     *
     * @param int $spellsPerDay7
     *
     * @return DailySpells
     */
    public function setSpellsPerDay7($spellsPerDay7)
    {
        $this->spells_per_day_7 = $spellsPerDay7;

        return $this;
    }

    /**
     * Get spellsPerDay7.
     *
     * @return int
     */
    public function getSpellsPerDay7()
    {
        return $this->spells_per_day_7;
    }

    /**
     * Set bonusSpells7.
     *
     * @param int $bonusSpells7
     *
     * @return DailySpells
     */
    public function setBonusSpells7($bonusSpells7)
    {
        $this->bonus_spells_7 = $bonusSpells7;

        return $this;
    }

    /**
     * Get bonusSpells7.
     *
     * @return int
     */
    public function getBonusSpells7()
    {
        return $this->bonus_spells_7;
    }

    /**
     * Set spellsKnown8.
     *
     * @param int $spellsKnown8
     *
     * @return DailySpells
     */
    public function setSpellsKnown8($spellsKnown8)
    {
        $this->spells_known_8 = $spellsKnown8;

        return $this;
    }

    /**
     * Get spellsKnown8.
     *
     * @return int
     */
    public function getSpellsKnown8()
    {
        return $this->spells_known_8;
    }

    /**
     * Set spellSaveDc8.
     *
     * @param int $spellSaveDc8
     *
     * @return DailySpells
     */
    public function setSpellSaveDc8($spellSaveDc8)
    {
        $this->spell_save_dc_8 = $spellSaveDc8;

        return $this;
    }

    /**
     * Get spellSaveDc8.
     *
     * @return int
     */
    public function getSpellSaveDc8()
    {
        return $this->spell_save_dc_8;
    }

    /**
     * Set spellsPerDay8.
     *
     * @param int $spellsPerDay8
     *
     * @return DailySpells
     */
    public function setSpellsPerDay8($spellsPerDay8)
    {
        $this->spells_per_day_8 = $spellsPerDay8;

        return $this;
    }

    /**
     * Get spellsPerDay8.
     *
     * @return int
     */
    public function getSpellsPerDay8()
    {
        return $this->spells_per_day_8;
    }

    /**
     * Set bonusSpells8.
     *
     * @param int $bonusSpells8
     *
     * @return DailySpells
     */
    public function setBonusSpells8($bonusSpells8)
    {
        $this->bonus_spells_8 = $bonusSpells8;

        return $this;
    }

    /**
     * Get bonusSpells8.
     *
     * @return int
     */
    public function getBonusSpells8()
    {
        return $this->bonus_spells_8;
    }

    /**
     * Set spellsKnown9.
     *
     * @param int $spellsKnown9
     *
     * @return DailySpells
     */
    public function setSpellsKnown9($spellsKnown9)
    {
        $this->spells_known_9 = $spellsKnown9;

        return $this;
    }

    /**
     * Get spellsKnown9.
     *
     * @return int
     */
    public function getSpellsKnown9()
    {
        return $this->spells_known_9;
    }

    /**
     * Set spellSaveDc9.
     *
     * @param int $spellSaveDc9
     *
     * @return DailySpells
     */
    public function setSpellSaveDc9($spellSaveDc9)
    {
        $this->spell_save_dc_9 = $spellSaveDc9;

        return $this;
    }

    /**
     * Get spellSaveDc9.
     *
     * @return int
     */
    public function getSpellSaveDc9()
    {
        return $this->spell_save_dc_9;
    }

    /**
     * Set spellsPerDay9.
     *
     * @param int $spellsPerDay9
     *
     * @return DailySpells
     */
    public function setSpellsPerDay9($spellsPerDay9)
    {
        $this->spells_per_day_9 = $spellsPerDay9;

        return $this;
    }

    /**
     * Get spellsPerDay9.
     *
     * @return int
     */
    public function getSpellsPerDay9()
    {
        return $this->spells_per_day_9;
    }

    /**
     * Set bonusSpells9.
     *
     * @param int $bonusSpells9
     *
     * @return DailySpells
     */
    public function setBonusSpells9($bonusSpells9)
    {
        $this->bonus_spells_9 = $bonusSpells9;

        return $this;
    }

    /**
     * Get bonusSpells9.
     *
     * @return int
     */
    public function getBonusSpells9()
    {
        return $this->bonus_spells_9;
    }

    /**
     * Set character.
     *
     * @param \AppBundle\Entity\Characters|null $character
     *
     * @return DailySpells
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
