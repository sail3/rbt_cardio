<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use CardioBundle\Form\Type\GenericType;
use CardioBundle\Form\Type\CausaDescompensanteType;

class FichaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaIngreso', 'date', array(
              'widget' => 'single_text',
              'html5' => false,
            ))
            ->add('motivoHospitalizacion', 'choice', array(
              'choices' => [
                'Consultorio',
                'Shock Trauma',
                'Topico Medicina',
                ]
            ))
            ->add('fallaCardiaca')
            ->add('fallaCardiacaEtiologia')
            ->add('nyhaIngreso')
            ->add('sindromeCardiorenal')
            ->add('fraccionEyeccion')
            ->add('tapse')
            ->add('altaMotivo')
            ->add('altaFecha', 'date', array(
              'widget' => 'single_text',
              'html5' => false,
            ))
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
            ->add('idmedicacion', 'entity', array(
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
