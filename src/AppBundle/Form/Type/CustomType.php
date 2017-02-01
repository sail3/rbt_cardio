<?php

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        /*parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'choices' => array(
                'm' => 'Male',
                'f' => 'Female',
            )
        ));*/
        $resolver->setDefaults(array(
            'nombre' => array(),
            'apellido' => array(),
        ));
    }


    public function getParent()
    {
        //return parent::getParent();
        return EntityType::class;
        //return ChoiceType::class;
    }

}