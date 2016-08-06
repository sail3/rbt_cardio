<?php
namespace CardioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GenericType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'expanded' => true,
            'multiple' => true,
            'data_class' => 'CardioBundle\Entity\CausaDescompensante',
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
