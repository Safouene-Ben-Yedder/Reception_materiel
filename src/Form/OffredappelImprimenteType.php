<?php

namespace App\Form;

use App\Entity\OffredappelImprimente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffredappelImprimenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateCreation')
            ->add('description')
            ->add('commentaire')
            ->add('rapport')
            ->add('qrCode')
            ->add('resultat')
            ->add('reference')
            ->add('valide')
            ->add('nombre')
            ->add('technologieImpression')
            ->add('vitesseImpression')
            ->add('resolutionImpression')
            ->add('marque')
            ->add('appeldoffreimprimente')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffredappelImprimente::class,
        ]);
    }
}
