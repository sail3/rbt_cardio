<?php

namespace AppBundle\Form;

use AppBundle\Form\Type\CustomType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FichaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaIngreso')
            ->add('motivoHospitalizacion')
            ->add('fallaCardiaca')
            ->add('fallaCardiacaEtiologia')
            ->add('nyhaIngreso')
            ->add('sindromeCardiorenal')
            ->add('fraccionEyeccion')
            ->add('tapse')
            ->add('altaMotivo')
            ->add('altaFecha')
            ->add('altaDescripcion')
            ->add('anotaciones')
            ->add('causasDescompensante', EntityType::class, array(
                'class' => 'BackendBundle:Descompensacion',
                'mapped' => false,
                'multiple' => true,
                'expanded' => true,
            ))
            /*
            ->add($builder->create('Descompensaciones', FormType::class, array(
                    'mapped' => false,
                    //'data_class' => 'BackendBundle:Descompensacion',
                ))
                    ->add('Nombre', TextType::class)
                    ->add('Descripcion', EmailType::class)
                    ->add('causasDescompensante', EntityType::class, array(
                        'class' => 'BackendBundle:Descompensacion',
                        'mapped' => false,
                        'multiple' => true,
                        'expanded' => true,
                    ))
                , array(
                    'class' => 'BackendBundle:Descompensacion',
                )
            )*/
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Ficha'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_ficha';
    }


}
