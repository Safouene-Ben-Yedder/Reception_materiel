<?php

namespace App\Form;

use App\Entity\AppeldoffreSwitch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppeldoffreSwitchType extends AbstractType
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
            ->add('nbrPorts')
            ->add('rapport')
            ->add('marque')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AppeldoffreSwitch::class,
        ]);
    }
}
