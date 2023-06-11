<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreEtGammeController extends AbstractController
{
    /**
     * @Route("/chambre/et/gamme", name="app_chambre_et_gamme")
     */
    public function index(): Response
    {






        
        return $this->render('chambre_et_gamme/index.html.twig', [
            'controller_name' => 'ChambreEtGammeController',
        ]);
    }
}
