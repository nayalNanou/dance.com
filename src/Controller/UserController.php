<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Dance;
use App\Entity\User;

/**
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/my-profile", name="profile")
     */
    public function myProfile()
    {
        return $this->render('user/profile.html.twig');
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function showUser($id)
    {
        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['id' => $id]);

        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }
}
