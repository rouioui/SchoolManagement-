<?php 
// src/Controller/HomeController.php
namespace App\Controller;

use App\Entity\Enseignant;
use App\Entity\Events;
use App\Entity\Messages;
use App\Entity\Blog;
use App\Entity\BlogArticle;
use App\Entity\CategorieBlog;
use App\Entity\Departements;
use App\Form\MessagesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $teachers = $this->entityManager->getRepository(Enseignant::class)->findAll();

        $Departement = $this->entityManager->getRepository(Departements::class)->findAll();

        $events = $this->entityManager->getRepository(Events::class)->findAll();
        $blogs = $this->entityManager->getRepository(Blog::class)->findAll();
        $lastBlog = end($blogs);
        $blogsCategorie = $this -> entityManager -> getRepository(CategorieBlog::class)->findAll();


        $randomTeachers = [];
        if (count($teachers) > 0) {
            $randomKeys = array_rand($teachers, min(3, count($teachers)));
            if (!is_array($randomKeys)) {
                $randomKeys = [$randomKeys];
            }
            foreach ($randomKeys as $key) {
                $randomTeachers[] = $teachers[$key];
            }
        }
            
            $randomBlogsCategorie = [];
            if (count($blogsCategorie) > 0) {
                $randomKeys = array_rand($blogsCategorie, min(6, count($blogsCategorie)));
                if (!is_array($randomKeys)) {
                    $randomKeys = [$randomKeys];
                }
                foreach ($randomKeys as $key) {
                    $randomBlogsCategorie[] = $blogsCategorie[$key];
                }
            }
        

        $randomDepartement = [];
        if (count($Departement) > 0) {
            $randomKeys = array_rand($Departement, min(6, count($Departement)));
            if (!is_array($randomKeys)) {
                $randomKeys = [$randomKeys];
            }
            foreach ($randomKeys as $key) {
                $randomDepartement[] = $Departement[$key];
            }
        }
    

        $message = new Messages();
        $form = $this->createForm(MessagesType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $message->setCreatedAt(new \DateTimeImmutable());

            
            $this->entityManager->persist($message);
            $this->entityManager->flush();

            
            $this->addFlash('success', 'Your message has been sent successfully.');

            
            return $this->redirectToRoute('app_home');
        }


        return $this->render('home/index.html.twig', [
            'teachers' => $randomTeachers,
            'events' => $events,
            'form' => $form->createView(),
            'blogsCategorie' =>$randomBlogsCategorie,
            'blog'=> $lastBlog,
            'Departements' => $randomDepartement      
          ]);
    }
}
?>