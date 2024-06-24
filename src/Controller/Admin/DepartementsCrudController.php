<?php

namespace App\Controller\Admin;

use App\Entity\Departements;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DepartementsCrudController extends AbstractCrudController
{
    public const DEPARTEMENT_BASE_PATH ="upload/images/Depatements";
    public const DEPARTEMENT_UPLOAD_DIR ="public/upload/images/Depatements";
    public static function getEntityFqcn(): string
    {
        
        return Departements::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('description'),
            ImageField::new('images')->setBasePath(self::DEPARTEMENT_BASE_PATH)
            ->setUploadDir(self::DEPARTEMENT_UPLOAD_DIR)->setSortable(false),    
            AssociationField::new('chefDepartement')
        ];
    }
    
}
