<?php

namespace App\Form;

use App\Entity\Bien;
use App\Entity\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class BienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //ajout du nom du bien
            ->add('nom', TextType::class, [
               'label' => 'Nom du bien',
               'attr' => ['class' => 'form-control mb-3']
            ])
        //ajout du description du bien
        ->add('description', TextareaType::class, [
        'label' => 'description du bien',
        'attr' => ['class' => 'form-control mb-3']
        ])
            //ajout du prix du bien
            ->add('prix', IntegerType::class, [
                'label' => 'prix du bien',
                'attr' => ['class' => 'form-control mb-3']
            ])
        //ajout du capacite du bien
        ->add('capacite', IntegerType::class, [
        'label' => 'Capacite du bien',
        'attr' => ['class' => 'form-control mb-3']
    ])
            //ajout de l'image du bien
            ->add('imagePath', FileType::class, [
                'label' => 'Image du bien',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control mb-3'],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Merci d\'uploader une image valide',

                    ])
                ]
            ])
            //ajout de type
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'label',
                'placeholder' => 'Sélectionnez un type',
                'attr' => ['class' => 'form-control mb-3']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data-class' => Bien::class,
            'attr' => ['class' => 'form']
        ]);
    }
}