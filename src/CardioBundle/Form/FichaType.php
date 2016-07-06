<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FichaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaIngreso','text')
            ->add('motivoHospitalizacion')
            ->add('fallaCardiaca')
            ->add('fallaCardiacaEtiologia')
            ->add('nyhaIngreso')
            ->add('sindromeCardiorenal')
            ->add('fraccionEyeccion')
            ->add('tapse')
            ->add('altaMotivo')
            ->add('altaFecha', 'text')
            ->add('altaDescripcion')
            ->add('anotaciones')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CardioBundle\Entity\Ficha'
        ));
    }
}
