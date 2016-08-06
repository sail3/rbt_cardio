<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HistoriaClinicaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('transfusionSanguinea')
            ->add('asisteControles')
            ->add('nroHospitalizaciones')
            ->add('peso')
            ->add('talla')
            ->add('tfg')
            // ->add('idpaciente')
            ->add('idmedicacion', 'entity', array(
              'class' => 'CardioBundle\Entity\Medicacion',
              'expanded' => true,
              'multiple' => true,
              'required' => false,
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CardioBundle\Entity\HistoriaClinica'
        ));
    }
}
