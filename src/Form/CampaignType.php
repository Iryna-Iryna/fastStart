<?php

namespace App\Form;

use App\Entity\Campaign;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Enter name:'
            ))
            ->add('categories', ChoiceType::class, array(
                'choices' => [
                    'Arts' => 'Arts',
                    'Design' => 'Design',
                    'Film' => 'Film',
                    'Games' => 'Games',
                    'Music' => 'Music'
                ]
            ))
            ->add('shortDescription', TextType::class, array(
                'label' => 'Enter short description:'
            ))           
            ->add('description', TextareaType::class, array(
                'label' => 'Enter description:'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
