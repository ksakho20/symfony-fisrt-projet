<?php

namespace App\Controller;

use App\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="app_avis")
     */
    public function index(Request $request): Response
    {

        $form=$this->createForm(AvisType::class);
        $form=$form->handleRequest($request);

       
        if ($form->isSubmitted() && $form->isValid()) {

                $this->addFlash('success', 'Le formulaire a été soumis avec succès !');}
        else{
                $this->addFlash('error', 'Tous les champs doivent être remplis pour procéder.');
            }
        




        
        return $this->render('avis/index.html.twig', [
            'form'=>$form->createView(),
        ]);
    }
}
