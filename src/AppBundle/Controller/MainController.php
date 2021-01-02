<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessCodes;
use AppBundle\Entity\Stats;
use AppBundle\Services\Responder;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/")
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
                'skills' => $em->getRepository('AppBundle:Skills')->findAll(),
            ]
        );
    }

    /**
     * @Route("/authenticate-bot")
     * @param Request $request
     * @return Response
     */
    public function authenticateBot(Request $request): Response
    {
        $token = $request->request->get('secret');
        $checkToken = $this->getParameter('secret');

        if ($token !== $checkToken) {
            return Responder::generateResponse(array($token), 401);
        }

        $em = $this->getDoctrine()->getManager();
        $code = self::randomPassword();
        $accessCode = new AccessCodes();
        $accessCode->setCode($code);
        $exp = new \DateTime('now +24 hours');
        $accessCode->setExpirationDatetime($exp);
        $em->persist($accessCode);
        $em->flush();

        return Responder::generateResponse(array('accessCode' => $code));
    }

    /**
     * @Route("/character-submitted", name="characterSubmitted_url")
     * @param Request $request
     * @return Response
     */
    public function characterSubmitted(Request $request): Response
    {
        $parameters = $request->request->all();
        $accessCode = $parameters['access_code'];

        $em = $this->getDoctrine()->getManager();

        if (count($em->getRepository('AppBundle:AccessCodes')->findOneBy(array('code' => $accessCode))) === 0) {
            return Responder::generateError('Your code is invalid');
        }

        return new JsonResponse($parameters, 200);
    }

    private function randomPassword(): string
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 64; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}
