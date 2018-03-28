<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class FacultyType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $choices = ['Assistant Professor'=>'Assistant Professor', 'Associate Professor' => 'Associate Professor', 'Professor'=>'Professor'];

        $builder
            ->add('firstName', null, array('label' => false, 'translation_domain' => 'FOSUserBundle', 'attr'=> array('placeholder' => 'First Name')))
            ->add('lastName', null, array('label' => false, 'translation_domain' => 'FOSUserBundle', 'attr'=> array('placeholder' => 'Last Name')))
            ->add('dateOfJoining',null, array('label' => false))
            ->add('phoneNumber', null, array('label' => false, 'attr'=> array('placeholder' => 'Phone Number')))
            ->add('email', null, array('label' => false, 'attr'=> array('placeholder' => 'Email')))
            ->add('designation',ChoiceType::class,array(
                'choices' => $choices,
                'required' => false,
                'label' => false,
                'empty_data' => 'abc'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Faculty'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_faculty';
    }


}
