<?php
// src/Controller/WildController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/wild", name="wild_")
 */
Class WildController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(): Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }

    /**
     * @Route("/serie/{carotte}", requirements={"carotte" = "[a-z0-9-]+"}, defaults={"carotte"="Aucune série sélectionnée, veuillez choisir une série"}, name="serie")
     */
    public function serie(string $carotte): Response
    {
        $result = str_replace("-", " ", "$carotte");
        $final = ucwords($result);
        return $this->render('wild/series.html.twig', ['carotte' => $final]);
    }

    /**
     * @Route("/film/{navet}", requirements={"navet" = "[a-z0-9-]+"}, defaults={"navet"="Aucune film sélectionné, veuillez choisir un film"}, name="film")
     */

    public function film(string $navet): Response
    {
        $result = str_replace("-", " ", "$navet");
        $final = ucwords($result);
        return $this->render('wild/films.html.twig', ['film' => $final]);
    }
}
