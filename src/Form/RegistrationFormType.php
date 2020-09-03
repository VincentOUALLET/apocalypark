<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'lastname',
                TextType::class,
                [
                    'label' => 'Nom de famille',
                    // 'attr' => [
                    //     'placeholder' => 'Nom',
                        
                    //     ],
                ]
            )
            ->add(
                'firstname',
                TextType::class,
                [
                    'label' => 'Prénom',
                    // 'attr' => [
                    //     'placeholder' => 'Prénom',
                        
                    //     ],
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'Email',
                    // 'attr' => [
                    //     'placeholder' => 'Adresse mail',
                        
                    //     ],
                ]
            )
            ->add(
                'username',
                TextType::class,
                [
                    'label' => 'Nom d\'utilisateur',
                    // 'attr' => [
                    //     'placeholder' => 'Nom d\'utilisateur',
                        
                    //         ],
                ]
            )
            ->add(
                'plainPassword',
                PasswordType::class,
                [
                    // instead of being set onto the object directly,
                    // this is read and encoded in the controller
                    'label' => 'Mot de passe',
                    'mapped' => false,
                    'constraints' => [
                        new NotBlank([
                            // this message will never be print because of browsers messages having priority on this one,
                            // they even don't allow the handlerequest to be called, no BACK checks can be done before
                            'message' => 'Rentrez un mot de passe',
                        ]),
                        new Length([
                            'min' => 6,
                            'minMessage' => 'Votre mot de passe devrait au moins comprendre {{ limit }} caractères, la sécurité du monde en dépend',
                            // max length allowed by Symfony for security reasons
                            'max' => 20,
                        ]),
                    ],
                ]
            )
            ->add(
                'agreeTerms',
                CheckboxType::class,
                [
                    'label' => 'Accepter les termes',
                    'mapped' => false,
                    'constraints' => [
                        new IsTrue([
                            'message' => 'Acceptez vite les termes bon sang',
                        ]),
                    ],
                ]
            )
            ->add('button',
            SubmitType::class,
            [
                'label' => 'Créer son compte',
                // 'mapped' => false,
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
                // 'constraints' => [
                //     new IsTrue([
                //         'message' => 'Acceptez vite les termes bon sang',
                //     ]),
                // ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
