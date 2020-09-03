<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservationType extends AbstractType
{

    // private $security;

    // public function __construct(Security $security)
    // {
    //     $this->security = $security;
    // }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // $currentUser = $this->security->getUser();
        $builder
            // ->add(
            //     'user',
            //     TextType::class,
            //     [
            //         'class' => User::class,
            //         'label' => 'Utilisateur',
            //         'choice_label' => 'username',
            //         'data' => $currentUser->getUsername(),
            //         'attr' =>[
            //         'disabled' => true,
            //         ],
            //     ]
            // )
            ->add(
                'adult_tickets',
                TextType::class,
                [
                    "label" => "Billets adulte"
                ]
            )
            ->add(
                'child_tickets',
                TextType::class,
                [
                    "label" => "Billets enfant"
                ]
            )
            ->add(
                'reservation_date',
                null,
                [
                    "label" => "Date de réservation"
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
