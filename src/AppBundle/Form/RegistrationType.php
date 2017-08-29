<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class RegistrationType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('lastName', TextType::class, array(
                    'data' => 'walter',
                    'label' => 'Nom'
                ))
                ->add('firstName', TextType::class, array(
                    'required' => false,
                    'empty_data' => 'gordon',
                    'label' => 'Prénom'
                ))
                ->add('birth', BirthdayType::class, array(
                    'label' => 'Date de naissance'
                ))
                ->add('phone', NumberType::class, array(
                    'label' => 'Télephone'
                ))
                ->add('adresse', TextType::class, array(
                    'label' => 'Adresse'
                ))
                ->add('cp', NumberType::class, array(
                    'label' => 'Code Postal'
                ))
                ->add('ville', TextType::class, array(
                    'required' => false,
                    'label' => 'Ville'
                ))
                ->add('country', CountryType::class, array(
                    'label' => 'Pays'
                ))
                ->remove('username')
        ;
    }

    public function getParent() {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'app_user_registration';
    }

}
