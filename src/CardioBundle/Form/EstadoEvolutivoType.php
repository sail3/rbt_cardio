<?php

namespace CardioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstadoEvolutivoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('glucosa')
            ->add('creatinina')
            ->add('urea')
            ->add('sodio')
            ->add('potasio')
            ->add('hb')
            ->add('plaquetas')
            ->add('vmc')
            ->add('hmc')
            ->add('rdwCv')
            ->add('leucocitos')
            ->add('neutro')
            ->add('linfocitos')
            ->add('troponina')
            ->add('cpkMb')
            ->add('tgp')
            ->add('albumina')
            ->add('proBnp')
            ->add('lactato')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CardioBundle\Entity\EstadoEvolutivo'
        ));
    }
}
