<?php

namespace App\Form;

use App\Entity\AppeldoffrePcsds;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppeldoffrePcsdsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat')
            ->add('profile')
            ->add('profileAppel')
            ->add('dateCreation')
            ->add('description')
            ->add('dateLimite')
            ->add('dateValidation')
            ->add('nombre')
            ->add('commentaire')
            ->add('rapport')
            ->add('ram')
            ->add('storage')
            ->add('cpu')
            ->add('cpu_cores')
            ->add('marque')
            ->add('cpu_threads_par_core')
            ->add('cpu_max_clock')
            ->add('gpu')
            ->add('gpu_memory')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AppeldoffrePcsds::class,
        ]);
    }
}
