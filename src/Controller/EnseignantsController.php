<?php

namespace App\Controller;

use App\Entity\Enseignant;
use App\Entity\Events;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\Event;

class EnseignantsController extends AbstractController
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/enseignants', name: 'app_enseignants')]
    public function index(): Response
    {
        $teachers = $this->entityManager->getRepository(Enseignant::class)->findAll();

        $randomKeys = array_rand($teachers, min(3, count($teachers)));
     $randomTeachers = [];
     foreach ($randomKeys as $key) {
         $randomTeachers[] = $teachers[$key];
     }

        return $this->render('enseignants/index.html.twig', [
            'teachers' => $randomTeachers , 'allTeachers'=>$teachers
        ]);
    }

#[Route('/enseignant/{id}', name: 'app_enseignant')]
public function show(int $id): Response
{
    $teacher = $this->entityManager->getRepository(Enseignant::class)->find($id);

    if (!$teacher) {
        throw $this->createNotFoundException('Enseignant non trouvé');
    }

    return $this->render('enseignants/enseignant.html.twig', [
        'teacher'=>$teacher
    ]);
}
}
