<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('positif', TextType::class,[
            'label'=>'Un Positif',
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('negatif',TextType::class,[
            'label'=>'Un Negatif',
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ->add('suggestion',TextType::class, [
            'label'=>'Avez-vous des suggestions ?',
            'attr'=>[
                'class' => 'form-control'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
