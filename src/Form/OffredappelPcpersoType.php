<?php

namespace App\Form;

use App\Entity\OffredappelPcperso;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffredappelPcpersoType extends AbstractType
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
            ->add('valide')
            ->add('nombre')
            ->add('ram')
            ->add('storage')
            ->add('cpu')
            ->add('cpuCores')
            ->add('cpuThreadsParCore')
            ->add('cpuMaxClock')
            ->add('gpu')
            ->add('gpuMemory')
            ->add('marque')
            ->add('appeldoffrepcperso')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffredappelPcperso::class,
        ]);
    }
}
