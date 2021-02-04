<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\Dance;
use App\Entity\User;

/**
 * @Route("/about-dance", name="aboutdance_")
 */
class AboutDanceController extends AbstractController
{
    /**
     * @Route("/{slug}", name="show")
     * @ParamConverter("dance", class="App\Entity\Dance", options={"mapping": {"slug": "slug"}})
     * @return Response
     */
    public function show(Dance $dance) : Response
    {
        $teachers = [];

        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        foreach ($users as $user) {
            $type_user = $user->getTypeuser()->getTypeuser();

            if (preg_match('#' . $dance->getName() . '#', $type_user)) { 
                $teachers[$user->getName()] = $user;
            }
        }

        return $this->render('about_dance/show.html.twig', [
            'dance' => $dance,
            'teachers' => $teachers,
        ]);
    }
}
