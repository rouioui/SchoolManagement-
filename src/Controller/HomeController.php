<?php

namespace App\Controller;
use App\Entity\Enseignant;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

     #[Route('/', name: 'app_home')]
    public function index(): Response
    {
     // Fetch all teachers from the database
     $teachers = $this->entityManager->getRepository(Enseignant::class)->findAll();

     // Randomly select three teachers from the fetched array
     $randomKeys = array_rand($teachers, min(3, count($teachers)));
     $randomTeachers = [];
     foreach ($randomKeys as $key) {
         $randomTeachers[] = $teachers[$key];
     }

     return $this->render('home/index.html.twig', [
         'teachers' => $randomTeachers,
     ]);
        
   
       
    }
}
