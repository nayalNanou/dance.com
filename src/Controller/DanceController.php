<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\Dance;

/**
 * @Route("/dance", name="dance_")
 */
class DanceController extends AbstractController
{
    /**
     * @Route("/{slug}", name="show")
     * @ParamConverter("dance", class="App\Entity\Dance", options={"mapping": {"slug": "slug"}})
     * @return Response
     */
    public function show(Dance $dance) : Response
    {
        return $this->render('dance/show.html.twig', [
            'dance' => $dance,
        ]);
    }
}
