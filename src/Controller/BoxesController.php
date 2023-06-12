<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoxesController extends AbstractController
{
    #[Route('/boxes', name: 'app_boxes')]
    public function index(): Response
    {
        return $this->render('boxes/index.html.twig', [
            'controller_name' => 'BoxesController',
        ]);
    }
}
