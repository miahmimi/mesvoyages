<?php

namespace App\Form;

use App\Entity\Environnement;
use App\Entity\Visite;
use DateTime;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;¨V  <
use Symfony\Component\OptionsResolver\OptionsResolver;101  

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ville')
            ->add('pays')
             ->add('datecreation', DateType::class, [
                'widget' => 'single_text',
                'data' => isset($options['data']) &&
                    $options['data']->getDateCreation() != null ? $options['data']->getDateCreation() : new DateTime('now'),
                'label' => 'Date'
            
            ])
            ->add('note')
                
            ->add('avis')
            ->add('tempmin', null,[
                'label'=>'t°min'
            ])
            ->add('tempmax',null,[
                'label'=>'t°max'
            ])
            ->add ('submitr',SubmitType::class ,[
                    'label'=>'Enregistrer'
                ])
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}