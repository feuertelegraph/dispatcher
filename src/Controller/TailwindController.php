<?php

namespace Feuertelegraph\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TailwindController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'TailwindController',
        ]);
    }

    #[Route('/leaflet', name: 'leaflet')]
    public function leaflet(): Response
    {
        return $this->render('leaflet.html.twig', [
            'controller_name' => 'TailwindController',
        ]);
    }
}
