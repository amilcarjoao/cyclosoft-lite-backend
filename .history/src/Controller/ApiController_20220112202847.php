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
                "signal_COURANT_inds01"=> 291,
				"signal_COURANT_inds02"=> 111,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 60.5555
            ],
            [
                "marque" => "Adidas", 
                "pointure" => 43
            ],
            [
                "marque" => "Nike", 
                "pointure" => 308
            ],
            [
                "marque" => "Air max", 
                "pointure" => 43
            ],
        ];
        return $this->json($chaussures);
    }
}
