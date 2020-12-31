<?php

namespace AppBundle\Command;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CleanExpiredPasswordsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('clean:expired:passwords')
            ->setDescription('Cleans all the expired passwords from the DB');
    }

    /**
     * {@inheritdoc}
     * @throws \Doctrine\ORM\ORMException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /**
         * @var EntityManager $em
         */
        $em = $this->getContainer()->get('doctrine')->getManager();

        $accessCodes = $em->getRepository('AppBundle:AccessCodes')->findAll();
        $now = new \DateTime();
        $cleaned = 0;

        foreach ($accessCodes as $accessCode) {
            if ($now > $accessCode->getExpirationDatetime()) {
                $em->remove($accessCode);
                $em->flush();
                $cleaned++;
            }
        }

        $output->writeln("Cleanup complete! $cleaned passwords were removed");
    }
}
