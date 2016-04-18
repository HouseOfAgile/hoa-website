<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Translation\Translator;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $categories=array('consulting','services','hosting');
        $builder
            ->add('email', 'email', array('label' => false,
                'horizontal_input_wrapper_class' => 'col-lg-12',
                'attr' => array(
                    'placeholder' => 'form.contact.email',
                )))
            ->add('fullName', 'text', array('label' => false,
                'horizontal_input_wrapper_class' => 'col-lg-12',
                'attr' => array(
                    'placeholder' => 'form.contact.your_name',
                )))
            ->add('message', 'textarea', array(
                'label' => false,
                'horizontal_input_wrapper_class' => 'col-lg-12',
                'attr' => array(
                    'class' => 'tinymce',
                    'data-theme'=> 'hoatheme',
                    'placeholder' => 'Get in touch with us !'
                )))
            ->add('phone', 'text', array('label' => false,
                'horizontal_input_wrapper_class' => 'col-lg-12',
                'required'=>false,
                'attr' => array(
                    'placeholder' => 'form.contact.phone',
                )))
            ->add('category', 'choice', array(
                'label' => false,
                'horizontal_input_wrapper_class' => 'col-lg-12',
                'empty_value' => 'form.contact.choose_one',
                'choices' => array_combine($categories,$categories),
                'required' => true,
            ))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
        ));
    }


    public function getName()
    {
        return 'contact_form';
    }

}