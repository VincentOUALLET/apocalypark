<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            // la fonction onlyOnIdex() permet d'afficher l'id dans l'index
            // et de ne pas laisser la possibilité de l'attribuer soi-même 
            IntegerField::new('id', 'Identifiant')->onlyOnIndex(),
            IntegerField::new('adult_tickets', 'Nombre d\'adultes'),
            IntegerField::new('child_tickets', 'Nombre d\'enfants'),
            AssociationField::new('user', 'Utilisateur'),
            DateTimeField::new('reservation_date', 'Date de réservation'),
        ];
    }
}
