<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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
            '@App/creator.twig', [
                'races' => $em->getRepository('AppBundle:Races')->findAll(),
                'classes' => $em->getRepository('AppBundle:Classes')->findAll(),
                'alignments' => $em->getRepository('AppBundle:Alignments')->findAll(),
                'deities' => $em->getRepository('AppBundle:Deities')->findAll(),
            ]
        );
    }

    /**
     * @Route("/character-submitted", name="characterSubmitted_url")
     * @param Request $request
     * @return Response
     */
    public function characterSubmitted(Request $request): Response
    {
        $parameters = $request->request->all();

        return new JsonResponse($parameters, 200);
    }
}
