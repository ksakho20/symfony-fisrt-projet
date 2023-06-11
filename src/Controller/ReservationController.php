<?php

namespace App\Controller;

use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="app_reservation")
     */
    public function index(Request $request): Response
    {

        $form=$this->createForm(ReservationType::class);
        $form=$form->handleRequest($request);

       
        if ($form->isSubmitted() && $form->isValid()) {

                $this->addFlash('success', 'Le formulaire a été soumis avec succès !');}
        else{
                $this->addFlash('error', 'Tous les champs doivent être remplis pour procéder.');
            }


        return $this->render('reservation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
