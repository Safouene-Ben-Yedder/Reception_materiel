<?php

namespace App\Form;

use App\Entity\OffredappelSwitch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffredappelSwitchType extends AbstractType
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
            ->add('marque')
            ->add('appeldoffreswitch')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffredappelSwitch::class,
        ]);
    }
}
