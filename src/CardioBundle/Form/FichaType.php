<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            ->add('fraccionEyeccion')
            ->add('tapse')
            ->add('altaMotivo')
            ->add('altaFecha', 'datetime')
            ->add('altaDescripcion')
            ->add('anotaciones')
            ->add('idcausaDescompensante', 'entity', array(
              'class' => 'CardioBundle\Entity\CausaDescompensante',
              'expanded' => true,
              'multiple' => true,
              'required' => false,
            ))
            // ->add('idestadoEvolutivo', 'entity', array(
            //   'class' => 'CardioBundle\Entity\EstadoEvolutivo',
            //   'expanded' => true,
            //   'multiple' => true,
            //   'required' => false,
            // ))
            ->add('idfactorRiesgo', 'entity', array(
              'class' => 'CardioBundle\Entity\FactorRiesgo',
              'expanded' => true,
              'multiple' => true,
              'required' => false,
            ))
            ->add('idmedicacionAlta', 'entity', array(
              'class' => 'CardioBundle\Entity\Medicacion',
              'expanded' => true,
              'multiple' => true,
              'required' => false,
            ))
            ->add('idrxTorax', 'entity', array(
              'class' => 'CardioBundle\Entity\RxTorax',
              'expanded' => true,
              'multiple' => true,
              'required' => false,
            ))
            // ->add('idcausaDescompensante', 'entity', array(
            //   'entry_type' => ChoiceType::class
            // ))
            // ->add('idestadoEvolutivo', CollectionType::class, array(
            //   'entry_type' => ChoiceType::class
            // ))
            // ->add('idfactorRiesgo', CollectionType::class, array(
            //   'entry_type' => ChoiceType::class
            // ))
            // ->add('idmedicacionAlta', CollectionType::class, array(
            //   'entry_type' => ChoiceType::class
            // ))
            // ->add('idrxTorax', CollectionType::class, array(
            //   'entry_type' => ChoiceType::class
            // ))
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
