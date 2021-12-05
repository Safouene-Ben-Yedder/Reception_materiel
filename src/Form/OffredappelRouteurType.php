<?php

namespace App\Form;

use App\Entity\OffredappelRouteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffredappelRouteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateCreation')
            ->add('description')
            ->add('commentaire')
            ->add('rapport')
            ->add('resultat')
            ->add('qrCode')
            ->add('reference')
            ->add('nombre')
            ->add('valide')
            ->add('nbrPorts')
            ->add('vitesseTel')
            ->add('vitesseSansFil')
            ->add('marque')
            ->add('appeldoffrerouteur')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffredappelRouteur::class,
        ]);
    }
}
