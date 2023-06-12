<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/mon-panier/add/{id}', name: 'card_add')]
    public function index(CartService $cartService , int $id): Response
    {
        $cartService->addToCart($id);
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
