<?php

namespace App\Controller\Admin;

use App\Entity\Peliculas;
use App\Entity\Actores;
use App\Entity\Directores;
use App\Entity\ImbdMovies;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);

        // Option 1. Make your dashboard redirect to the same page for all users
        return $this->redirect($adminUrlGenerator->setController(PeliculasCrudController::class)->generateUrl());

        // Option 2. Make your dashboard redirect to different pages depending on the user
        if ('jane' === $this->getUser()->getUsername()) {
            return $this->redirect('...');
        }
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Guestbook');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Peliculas', 'icon class', Peliculas::class);
        yield MenuItem::linkToCrud('Actores', 'icon class', Actores::class);
        yield MenuItem::linkToCrud('Directores', 'icon class', Directores::class);
        yield MenuItem::linkToCrud('Todos los datos', 'icon class', ImbdMovies::class);
    }



}//EndClass


