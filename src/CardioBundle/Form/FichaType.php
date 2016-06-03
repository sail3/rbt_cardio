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
            ->add('fechaIngreso', 'datetime')
            ->add('motivoHospitalizacion')
            ->add('fallaCardiaca')
            ->add('fallaCardiacaEtiologia')
            ->add('nyhaIngreso')
            ->add('sindromeCardiorenal')
            ->add('sindromeCardiorenalTipo')
            ->add('fraccionEyeccion')
            ->add('transfusionSanguinea')
            ->add('cceeAsiste')
            ->add('cceeUltima', 'datetime')
            ->add('hospitalizaciones')
            ->add('anotaciones')
            ->add('examenSolicitado')
            ->add('idcausaDescompensante')
            ->add('idestadoEvolutivo')
            ->add('idfactorRiesgo')
            ->add('idpaciente')
            ->add('idmedicacionAlta')
            ->add('idrxTorax')
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
