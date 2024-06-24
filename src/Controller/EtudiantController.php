<?php

namespace App\Controller;

use App\Entity\Etudiant;
use App\Entity\Note;
use App\Form\StudentSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/etudiant/search', name: 'etudiant_search')]
    public function search(Request $request): Response
    {
        $form = $this->createForm(StudentSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $cin = $data['cin'];
            $birthday = $data['dateNaissance'];
            $cne = $data['cne'];

            // Find the student by CIN and birthday
            $student = $this->entityManager->getRepository(Etudiant::class)->findOneBy([
                'cin' => $cin,
                'dateNaissance' => $birthday,
                'cne' => $cne 
            ]);

            if ($student) {
                return $this->redirectToRoute('app_etudiant', ['id' => $student->getId()]);
            } else {
                $this->addFlash('error', 'auncun etudiant avec cest parametre');
            }
        }
        return $this->render('etudiant/search.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/etudiant/{id}', name: 'app_etudiant')]
    public function index(int $id): Response
    {
        $student = $this->entityManager->getRepository(Etudiant::class)->find($id);

        if (!$student) {
            throw $this->createNotFoundException('Student not found');
        }

        // Fetch the notes along with associated Cours entities
        $notes = $this->entityManager->getRepository(Note::class)->findBy(['Etudiant' => $student]);

        return $this->render('etudiant/index.html.twig', [
            'student' => $student,
            'notes' => $notes,
        ]);
    }
}
?>