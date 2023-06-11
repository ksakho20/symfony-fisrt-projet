<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('prenom',TextType::class,[
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('age', IntegerType::class, [
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('email',EmailType::class, [
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('adresse',TextareaType::class, [
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('chambre',NumberType::class, [
            'label'=>'Nombre de chambre',
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('chambre2',NumberType::class, [
            'label'=>'Type de chambre',
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('submit',SubmitType::class, [
            'attr'=>[
                'class' => 'btn btn-dark m-2'
            ]
            ]);
    
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
