<?php

namespace App\Controller\Admin;

use App\Entity\Attraction;
use Symfony\Component\HttpFoundation\File\File;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AttractionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Attraction::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $current_user = $this->getUser();
        
        return [
            IntegerField::new('id', 'Identifiant')->onlyOnIndex(),
            TextField::new('title', 'Titre'),
            TextField::new('description', 'Description'),
            // TextField::new('featured_image', 'Image'),
            ImageField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->setLabel('Fichier image'),
            // TextField::new('created_by', 'Créateur'),
            // DateTimeField::new('created_at'),
        ];
    }
}
