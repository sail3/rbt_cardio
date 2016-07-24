<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('email', 'email')
            ->add('password', 'repeated', array(
              'type' => 'password',
              'invalid_message' => 'Las dos claves deben coincidir.',
              'options' => array('label' => 'Clave Secreta'),
            ))
            ->add('role', 'choice', array(
              'choices' => [
                'ROLE_USUARIO' => 'Usuario',
                'ROLE_ADMIN' => 'Administrador',
                ],
            ))
            ->add('direccion')
            ->add('dni')
            ->add('fechaRegistro', 'date')
            ->add('enable')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CardioBundle\Entity\Usuario'
        ));
    }
}
