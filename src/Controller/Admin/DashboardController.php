<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\CategorieBlog;
use App\Entity\Etudiant;
use App\Entity\Tuteur;
use App\Entity\Niveau;
use App\Entity\Note;
use App\Entity\Cours;
use App\Entity\Departements;
use App\Entity\Enseignant;
use App\Entity\Events;
use App\Entity\Messages;
use App\Entity\NumberExams;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\Event;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
        
    }
    #[Route('/dashboard', name: 'admin')]
    public function index(): Response
    {
      
        $url = $this->adminUrlGenerator->setController(EtudiantCrudController::class)->generateUrl();

       
       return $this->redirect($url);

       
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion Scolair');   
       
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section("Users");
        yield MenuItem::subMenu('Etudiants','fa-solid fa-user-graduate')->setSubItems( [
            MenuItem::linkToCrud('ajouter Etudiant','fas fa-plus',Etudiant::class)
            ->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('afficher Etudiant','fas fa-eye',Etudiant::class)]);

            yield MenuItem::subMenu('Tuteurs','fa-solid fa-person')->setSubItems( [
                MenuItem::linkToCrud('ajouter Tuteur','fas fa-plus',Tuteur::class)
                ->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('afficher tuteur','fas fa-eye',Tuteur::class)]);

                yield MenuItem::subMenu('Enseignants','fa-solid fa-user')->setSubItems( [
                    MenuItem::linkToCrud('ajouter Enseignant','fas fa-plus',Enseignant::class)
                    ->setAction(Crud::PAGE_NEW),
                    MenuItem::linkToCrud('afficher Enseignants','fas fa-eye',Enseignant::class)]);
                yield MenuItem::section("School Management");
                yield MenuItem::subMenu('Niveau','fa-solid fa-graduation-cap')->setSubItems( [
                    MenuItem::linkToCrud('ajouter Niveau','fas fa-plus',Niveau::class)
                    ->setAction(Crud::PAGE_NEW),
                    MenuItem::linkToCrud('afficher Niveau','fas fa-eye',Niveau::class)]);

                
                    yield MenuItem::subMenu('Note','fa-solid fa-file-circle-plus')->setSubItems( [
                        MenuItem::linkToCrud('ajouter Note','fas fa-plus',Note::class)
                        ->setAction(Crud::PAGE_NEW),
                        MenuItem::linkToCrud('afficher Notes','fas fa-eye',Note::class)]);
                        yield MenuItem::subMenu('number Exams','fa-solid fa-inbox')->setSubItems( [
                            MenuItem::linkToCrud('Ajouter','fas fa-plus',NumberExams::class)
                            ->setAction(Crud::PAGE_NEW),
                            MenuItem::linkToCrud('Nombre Exams','fas fa-eye',NumberExams::class)]);

                            yield MenuItem::subMenu('Departement','fa-solid fa-inbox')->setSubItems( [
                                MenuItem::linkToCrud('Ajouter','fas fa-plus',Departements::class)
                                ->setAction(Crud::PAGE_NEW),
                                MenuItem::linkToCrud('Afficher Departement','fas fa-eye',Departements::class)]);

                        yield MenuItem::subMenu('Cours','fa-solid fa-book')->setSubItems( [
                            MenuItem::linkToCrud('ajouter Cour','fas fa-plus',Cours::class)
                            ->setAction(Crud::PAGE_NEW),
                            MenuItem::linkToCrud('afficher Cours','fas fa-eye',Cours::class)]);
          
                            yield MenuItem::section("Events");
                            yield MenuItem::subMenu('Events','fa-solid fa-calendar-plus')->setSubItems( [
                                MenuItem::linkToCrud('ajouter Event','fas fa-plus',Events::class)
                                ->setAction(Crud::PAGE_NEW),
                                MenuItem::linkToCrud('afficher Events','fas fa-eye',Events::class)]);



                                yield MenuItem::section("Messages");
                                yield MenuItem::subMenu('Messages','fa-solid fa-message')->setSubItems( [
                                    
                                    MenuItem::linkToCrud('afficher Messages','fas fa-eye',Messages::class)]);


                        
                                    yield MenuItem::section("Blog");
                                    yield MenuItem::subMenu('categorie Blog','fa-solid fa-icons')->setSubItems( [
                                        MenuItem::linkToCrud('ajouter categorie','fas fa-plus',CategorieBlog::class)
                                        ->setAction(Crud::PAGE_NEW),
                                        MenuItem::linkToCrud('afficher categorie','fas fa-eye',CategorieBlog::class)]);
                            
                                        yield MenuItem::subMenu('Blogs','fa-solid fa-inbox')->setSubItems( [
                                            MenuItem::linkToCrud('ajouter Blog','fas fa-plus',Blog::class)
                                            ->setAction(Crud::PAGE_NEW),
                                            MenuItem::linkToCrud('afficher Blogs','fas fa-eye',Blog::class)]);

                                         
                            
                            
                                
       
    }
}
