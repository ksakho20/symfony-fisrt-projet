<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request): Response
    {
        $form=$this->createForm(ContactType::class);
        $form=$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // if($form->isValid()){

                $this->addFlash('success', 'Le formulaire a été soumis avec succès !');}
        else{
                $this->addFlash('error', 'Tous les champs doivent être remplis pour procéder.');
            }
        







        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
