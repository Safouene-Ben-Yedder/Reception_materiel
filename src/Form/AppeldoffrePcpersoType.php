<?php

namespace App\Form;

use App\Entity\AppeldoffrePcperso;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppeldoffrePcpersoType extends AbstractType
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
            ->add('ram')
            ->add('storage')
            ->add('cpu')
            ->add('cpuCores')
            ->add('cpuThreadsParCore')
            ->add('cpuMaxClock')
            ->add('gpu')
            ->add('gpuMemory')
            ->add('rapport')
            ->add('marque')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AppeldoffrePcperso::class,
        ]);
    }
}
