<?php

namespace Utilisateurs\UtilisateursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pointAchat')
            ->add('destination')
            ->add('date', DateTimeType::class ,array('widget' => 'single_text'))
            ->add('prix')
            ->add('listAchats',TextareaType::class)
            ->add('remarques',TextareaType::class)->add('client')
            ->add('partenaire');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Utilisateurs\UtilisateursBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'utilisateurs_utilisateursbundle_reservation';
    }


}
