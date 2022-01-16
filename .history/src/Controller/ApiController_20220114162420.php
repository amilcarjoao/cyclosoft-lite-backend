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
        $apiRepository-fi

         $api = new Api();
        $api->setSignalCOURANTInds01(1)
        ->setSignalCOURANTInds02(4)
        ->setSignalTEMPERATInds01(3)
        ->setSignalTEMPERATInds02(5);
      $ma = $this->getDoctrine()->getManager();
      $ma->persist($api);
      $ma->flush();
        return $this->json($mesures);
    
    }

}
