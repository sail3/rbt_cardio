<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('nombre')
            ->add('paterno')
            ->add('materno')
            ->add('genero')
            ->add('fechaNacimiento', 'datetime')
            ->add('telefono')
            ->add('activo')
            ->add('fechaRegistro', 'datetime')
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
