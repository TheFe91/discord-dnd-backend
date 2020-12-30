<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="indexAction_url")
     * @return Response|null
     */
    public function indexAction(): ?Response
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render(
            '@App/landing.twig', [
                'races' => $em->getRepository('AppBundle:Races')->findAll(),
                'classes' => $em->getRepository('AppBundle:Classes')->findAll(),
                'alignments' => $em->getRepository('AppBundle:Alignments')->findAll(),
                'deities' => $em->getRepository('AppBundle:Deities')->findAll(),
            ]
        );
    }
}
