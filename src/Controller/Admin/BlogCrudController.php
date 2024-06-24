<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\CategorieBlog;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BlogCrudController extends AbstractCrudController
{
    public const BLOG_BASE_PATH ="upload/images/Blogs";
    public const BLOG_UPLOAD_DIR ="public/upload/images/Blogs";
    public static function getEntityFqcn(): string
    {
        return Blog::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ImageField::new('image')->setBasePath(self::BLOG_BASE_PATH)
            ->setUploadDir(self::BLOG_UPLOAD_DIR)->setSortable(false),
            TextField::new('name'),
            TextEditorField::new('introduction'),
            TextEditorField::new('content'),
            DateField::new('createdAt')->hideOnForm(),
            DateField::new('updatedAt')->hideOnForm(),
            BooleanField::new('active'),
    
            AssociationField::new("CategorieBlog")
        ];
    }
   public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if(!$entityInstance instanceof Blog) return;
        $entityInstance->setCreatedAt(new \DateTimeImmutable);
        parent::persistEntity($em,$entityInstance);
        
    }
    
    
    
}
