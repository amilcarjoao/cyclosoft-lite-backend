<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Api;
use App\Repository\ApiRepository;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index(ApiRepository $apiRepository): Response
    {
        $api = $apiRepository->findAll();

      $ma->flush();
        return $this->json($mesures);
    
    }

}
