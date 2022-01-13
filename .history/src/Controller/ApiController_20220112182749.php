<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index(): Response
    {
        $chaussures = [
            [
                "marque" => "Nike", 
                "pointure" => 40
            ],
            [
                "marque" => "Adidas", 
                "pointure" => 43
            ],
            [
                "marque" => "Nike", 
                "pointure" => 38
            ],
            [
                "marque" => "Air max", 
                "pointure" => 43

            ],
        ];
        return $this->json($chaussures);
    }
}
