<?php

namespace AppBundle\Command;

use AppBundle\Entity\Skills;
use AppBundle\Services\ConnectionService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FillInitialDataCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('fill:initial:data')
            ->setDescription('Fills the DB with the initial data');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sql = "
            INSERT INTO `alignments` (`id`, `name`) VALUES
            (1, 'Lawful Good'),
            (2, 'Neutral Good'),
            (3, 'Chaotic Good'),
            (4, 'Lawful Neutral'),
            (5, 'Pure Neutral'),
            (6, 'Chaotic Neutral'),
            (7, 'Lawful Evil'),
            (8, 'Neutral Evil'),
            (9, 'Chaotic Evil');
            
            INSERT INTO `classes` (`id`, `name`) VALUES
            (1, 'Barbarian'),
            (2, 'Bard'),
            (3, 'Cleric'),
            (4, 'Druid'),
            (5, 'Fighter'),
            (6, 'Monk'),
            (7, 'Paladine'),
            (8, 'Ranger'),
            (9, 'Rogue'),
            (10, 'Sorcerer'),
            (11, 'Wizard');
            
            INSERT INTO `deities` (`id`, `name`) VALUES
            (1, 'Boccob'),
            (2, 'Corellon Larethian'),
            (3, 'Ehlonna'),
            (4, 'Erythnul'),
            (5, 'Fharlanghn'),
            (6, 'Garl Glittergold'),
            (7, 'Gruumsh'),
            (8, 'Heironeous'),
            (9, 'Hextor'),
            (10, 'Kord'),
            (11, 'Moradin'),
            (12, 'Nerull'),
            (13, 'Obad-Hai'),
            (14, 'Olidammara'),
            (15, 'Pelor'),
            (16, 'St. Cuthbert'),
            (17, 'Vecna'),
            (18, 'Wee Jas'),
            (19, 'Yondalla');
            
            INSERT INTO `races` (`id`, `name`) VALUES
            (1, 'Human'),
            (2, 'Dwarf'),
            (3, 'Elf'),
            (4, 'Gnome'),
            (5, 'Half-Elf'),
            (6, 'Half-Orc'),
            (7, 'Halfling');

            INSERT INTO `skills` (`id`, `name`, `key_ability`) VALUES
            (1, 'Appraise', 'INT'),
            (2, 'Balance', 'DEX'),
            (3, 'Bluff', 'CHA'),
            (4, 'Climb', 'STR'),
            (5, 'Concentration', 'CON'),
            (6, 'Craft', 'INT'),
            (7, 'Decipher Script', 'INT'),
            (8, 'Diplomacy', 'CHA'),
            (9, 'Disable Device', 'INT'),
            (10, 'Disguise', 'CHA'),
            (11, 'Escape Artist', 'DEX'),
            (12, 'Forgery', 'INT'),
            (13, 'Gather Information', 'CHA'),
            (14, 'Handle Animal', 'CHA'),
            (15, 'Heal', 'WIS'),
            (16, 'Hide', 'DEX'),
            (17, 'Intimidate', 'CHA'),
            (18, 'Jump', 'STR'),
            (19, 'Knowledge', 'INT'),
            (20, 'Listen', 'WIS'),
            (21, 'Move Silently', 'DEX'),
            (22, 'Open Lock', 'DEX'),
            (23, 'Perform', 'CHA'),
            (24, 'Profession', 'WIS'),
            (25, 'Ride', 'DEX'),
            (26, 'Search', 'INT'),
            (27, 'Sense Motive', 'WIS'),
            (28, 'Sleight Of Hand', 'DEX'),
            (29, 'Spellcraft', 'INT'),
            (30, 'Spot', 'WIS'),
            (31, 'Survival', 'WIS'),
            (32, 'Swim', 'STR'),
            (33, 'Tumble', 'DEX'),
            (34, 'Use Magic Device', 'CHA'),
            (35, 'Use Rope', 'DEX');
        ";

        ConnectionService::getConnection($this->getContainer())->exec($sql);
    }
}
