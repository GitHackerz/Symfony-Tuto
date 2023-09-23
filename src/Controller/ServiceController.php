<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/service/goToIndex', name: 'app_goToIndex')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/service/{name}', name: 'app_service_show')]
    public function show(string $name): Response
    {
        return $this->render('service/show.html.twig', [
            'controller_name' => 'ServiceController',
            'name' => $name,
        ]);
    }
}
