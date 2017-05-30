<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Affiliation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Fernando Caraballo <caraballo.ortiz@gmail.com>
 */
class AffiliationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('institutionName', TextType::class, [
                'required' => true,
            ])
            ->add('address')
            ->add('city')
            ->add('country')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Affiliation::class,
        ));
    }
}