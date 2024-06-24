<?php

namespace App\Controller;

use App\Entity\Departements;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DepartementsController extends AbstractController
{ private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/departements', name: 'app_departements')]
    public function index(): Response
    {
        $Departements = $this->entityManager->getRepository(Departements::class)->findAll();

        return $this->render('departements/index.html.twig',[
            'Departements' => $Departements
        ]);
       
    }
}
