<?php

namespace App\Form;

use App\Entity\OffredappelPcsds;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffredappelPcsdsType extends AbstractType
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
            ->add('marque')
            ->add('ram')
            ->add('storage')
            ->add('cpu')
            ->add('cpu_cores')
            ->add('cpu_threads_par_core')
            ->add('cpu_max_clock')
            ->add('gpu')
            ->add('gpu_memory')
            ->add('appeldoffrepcsds')
            ->add('utilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OffredappelPcsds::class,
        ]);
    }
}
