<?php

namespace App\Form;

use App\Entity\AppeldoffreImprimente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppeldoffreImprimenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat')
            ->add('dateCreation')
            ->add('description')
            ->add('dateLimite')
            ->add('dateValidation')
            ->add('nombre')
            ->add('commentaire')
            ->add('technologieImpression')
            ->add('vitesseImpression')
            ->add('resolutionImpression')
            ->add('rapport')
            ->add('marque')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AppeldoffreImprimente::class,
        ]);
    }
}
