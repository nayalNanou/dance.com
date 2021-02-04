<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Dance;
use App\Entity\User;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        $dances = $this->getDoctrine()
            ->getRepository(Dance::class)
            ->findAll();

        $user = $this->getUser();

        if ($user) {
            $this->addFlash('success', 'You are now connected !');
        }

        return $this->render('default/index.html.twig', [
            'dances' => $dances,
        ]);
    }
}
