<?php

namespace App\Form;

use App\Entity\Attraction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AttractionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('attraction_image', FileType::class, [
                'label' => 'Image',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => true,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '10Mi',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/gif',
                            'image/png',
                            // 'application/octet-stream',
                        ],
                        'mimeTypesMessage' => 'S\'il vous plaît, chargez une image valide',
                    ])
                ],
            ])
            ->add(
                'description',
                TextType::class,
                [
                    'label' => 'Description de l\'attraction',
                ]
            )
            ->add(
                'title',
                TextType::class,
                [
                    'label' => 'Nom de l\'attraction',
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Attraction::class,
        ]);
    }
}
