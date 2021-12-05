<?php

namespace App\Form;

use App\Entity\AppeldoffreRouteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppeldoffreRouteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat')
            ->add('dateCreation')
            ->add('dateLimite')
            ->add('description')
            ->add('dateValidation')
            ->add('nombre')
            ->add('commentaire')
            ->add('nbrPorts')
            ->add('vitesseTel')
            ->add('vitesseSansFil')
            ->add('rapport')
            ->add('marque')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AppeldoffreRouteur::class,
        ]);
    }
}
