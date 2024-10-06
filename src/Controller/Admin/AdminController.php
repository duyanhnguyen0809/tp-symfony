<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_homepage')]
    public function homepage(): Response
    {
        return $this->render('admin/homepage.html.twig');
    }

    #[Route('/movies', name: 'admin_movies')]
    public function movies(): Response
    {
        return $this->render('admin/admin_films.html.twig');
    }

    #[Route('/movies/add', name: 'admin_movies_add')]
    public function addMovie(): Response
    {
        return $this->render('admin/admin_add_films.html.twig');
    }
}