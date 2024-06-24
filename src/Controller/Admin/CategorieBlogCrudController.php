<?php

namespace App\Controller\Admin;

use App\Entity\CategorieBlog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategorieBlogCrudController extends AbstractCrudController
{
    public const BLOG_BASE_PATH ="upload/images/BlogsCategorie";
    public const BLOG_UPLOAD_DIR ="public/upload/images/BlogsCategorie";
    public static function getEntityFqcn(): string
    {
        return CategorieBlog::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ImageField::new('img')->setBasePath(self::BLOG_BASE_PATH)
            ->setUploadDir(self::BLOG_UPLOAD_DIR)->setSortable(false),
            TextField::new('name'),

        ];
    }
    
}
