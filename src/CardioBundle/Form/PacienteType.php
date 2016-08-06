<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;

class PacienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('historia')
            ->add('dni')
            ->add('numeroSeguro')
            ->add('nombre')
            ->add('paterno')
            ->add('materno')
            ->add('genero')
            ->add('fechaNacimiento', DateType::class, array(
              'widget' => 'single_text',
              'html5' => false,
            ))
            ->add('telefono')
            ->add('activo')
            ->add('fechaRegistro', DateType::class, array(
              'widget' => 'single_text',
              'html5' => false,
              // 'attr' => ['class' => 'js-datepicker'],
            ))
            ->add('ocupacion')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CardioBundle\Entity\Paciente'
        ));
    }
}
