<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\CategorieBlog;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        $Blogs = $this->entityManager->getRepository(Blog::class)->findAll();
        $blogsCategorie =$this->entityManager->getRepository(CategorieBlog::class)->findAll();

      

        return $this->render('blog/index.html.twig', [
            'BlogsCategorie' => $blogsCategorie,'Blogs' => $Blogs
        ]);
    }
}
