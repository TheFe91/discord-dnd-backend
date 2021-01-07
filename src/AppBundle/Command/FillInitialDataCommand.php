<?php

namespace AppBundle\Command;

use AppBundle\Entity\Classes;
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
    protected function execute(InputInterface $input, OutputInterface $output): ?int
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $connection = ConnectionService::getConnection($this->getContainer());

        $connection->exec("SET FOREIGN_KEY_CHECKS=0");

        $sql = "
            DELETE FROM alignments;
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
        ";
        $connection->exec($sql);

        $connection->exec('DELETE FROM classes');

        $class = new Classes();
        $class->setName('Barbarian');
        $class->setSkills([4,6,14,17,18,20,25,31,32]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Bard');
        $class->setSkills([1,2,3,4,5,6,7,8,10,11,13,16,18,19,20,21,23,24,27,28,29,32,33,34]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Cleric');
        $class->setSkills([5,6,8,15,19,24,29]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Druid');
        $class->setSkills([5,6,8,14,15,19,20,24,25,29,30,31,32]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Fighter');
        $class->setSkills([4,6,14,17,18,25,32]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Monk');
        $class->setSkills([2,4,5,6,8,11,16,18,19,20,21,23,24,27,30,32,33]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Paladine');
        $class->setSkills([5,6,8,14,15,19,24,25,27]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Ranger');
        $class->setSkills([4,5,6,14,15,16,18,19,20,21,24,25,26,30,31,32,35]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Rogue');
        $class->setSkills([1,2,3,4,6,7,8,9,10,11,12,13,16,17,18,19,20,21,22,23,24,26,27,28,30,32,33,34,35]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Sorcerer');
        $class->setSkills([3,5,6,19,24,29]);
        $em->persist($class);
        $em->flush();

        $class = new Classes();
        $class->setName('Wizard');
        $class->setSkills([5,6,7,19,24,29]);
        $em->persist($class);
        $em->flush();


        $sql = "
            DELETE FROM deities;
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
        ";
        $connection->exec($sql);

        $sql = "
            DELETE FROM races;
            INSERT INTO `races` (`id`, `name`) VALUES
            (1, 'Human'),
            (2, 'Dwarf'),
            (3, 'Elf'),
            (4, 'Gnome'),
            (5, 'Half-Elf'),
            (6, 'Half-Orc'),
            (7, 'Halfling');
        ";
        $connection->exec($sql);

        $sql = "
            DELETE FROM skills;
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
        $connection->exec($sql);

        $connection->exec("SET FOREIGN_KEY_CHECKS=1");

        return 0;
    }
}
