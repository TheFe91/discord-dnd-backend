<?php

namespace AppBundle\Command;

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
        ";

        ConnectionService::getConnection($this->getContainer())->exec($sql);
    }
}
