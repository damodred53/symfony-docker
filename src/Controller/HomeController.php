<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }

    
    #[Route('/current-time', name: 'app_current_time')]
    public function currentTime(): JsonResponse
    {
        return $this->json([
            'current_time' => date('Y-m-d H:i:s'),
        ]);
    }


    
    #[Route('/greet/{name}', name: 'app_greet')]
    public function greet(string $name): JsonResponse
    {
        return $this->json([
            'message' => "Hello, $name! Welcome to our site.",
        ]);
    }

    
    #[Route('/sum/{a}/{b}', name: 'app_sum')]
    public function sum(int $a, int $b): JsonResponse
    {
        return $this->json([
            'result' => $a + $b,
        ]);
    }
}
