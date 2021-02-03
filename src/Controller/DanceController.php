<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Dance;

/**
 * @Route("/dance", name="dance_")
 */
class DanceController extends AbstractController
{
    /**
     * @Route("/{id}", name="show")
     */
    public function show($id) : Response
    {
        $dance = $this->getDoctrine()
            ->getRepository(Dance::class)
            ->findOneBy(['id' => $id]);

        return $this->render('dance/show.html.twig', [
            'dance' => $dance,
        ]);
    }
}
