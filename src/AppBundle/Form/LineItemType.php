<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LineItemType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('quantity', ChoiceType::class, array('choices' => array(
                        '1' => '1',
                        '2' => '2',
                        '3' => '3'),
                    'choices_as_values' => true
                ))
                ->add('price', HiddenType::class)
                ->add('poster', EntityType::class, array(
                    'class' => 'AppBundle:Poster',
                    'choice_label' => 'id'
                ))
                ->add('ordor', EntityType::class, array(
                    'class' => 'AppBundle:Ordor',
                    'choice_label' => 'id'
                ))
                ->add('send', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LineItem'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_lineitem';
    }

}
