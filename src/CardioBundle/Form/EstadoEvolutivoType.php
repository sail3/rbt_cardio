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
            ->add('sodio')
            ->add('hb')
            ->add('vmc')
            ->add('rdw')
            ->add('leucocitos')
            ->add('neutro')
            ->add('linfocitos')
            ->add('troponina')
            ->add('tgp')
            ->add('proBnp')
            ->add('lactato')
            ->add('idficha')
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
