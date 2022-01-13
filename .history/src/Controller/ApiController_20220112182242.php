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
	{
		"metadata": {
			"measurement": "main_cyclodata",
			"columns" : [
				"signal_COURANT_inds01",
				"signal_COURANT_inds02",
				"signal_TEMPERAT_inds01",
				"signal_TEMPERAT_inds02"
			]
		},
		"data": [
			{
				"signal_COURANT_inds01"=> 291,
				"signal_COURANT_inds02"=> 111,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 60.5555
			},
			{
				"signal_COURANT_inds01"=> 211,
				"signal_COURANT_inds02"=> 99,
				"signal_TEMPERAT_inds01"=> 180,
				"signal_TEMPERAT_inds02"=> 55
			},
			{
				"signal_COURANT_inds01"=> 574,
				"signal_COURANT_inds02"=> 240,
				"signal_TEMPERAT_inds01"=> 100,
				"signal_TEMPERAT_inds02"=> 70
			},
			{
				"signal_COURANT_inds01"=> 100,
				"signal_COURANT_inds02"=> 260,
				"signal_TEMPERAT_inds01"=> 75,
				"signal_TEMPERAT_inds02"=> 144
			},
			{
				"signal_COURANT_inds01" => 300,
				"signal_COURANT_inds02" => 141,
				"signal_TEMPERAT_inds01" => 80,
				"signal_TEMPERAT_inds02" => 40
			},
			{
				"signal_COURANT_inds01"=> 290,
				"signal_COURANT_inds02"=> 111,
				"signal_TEMPERAT_inds01"=> 184,
				"signal_TEMPERAT_inds02"=> 66
			},
			{
				"signal_COURANT_inds01"=> 136,
				"signal_COURANT_inds02"=> 263,
				"signal_TEMPERAT_inds01"=> 141,
				"signal_TEMPERAT_inds02"=> 53
			},
			{
				"signal_COURANT_inds01"=> 164,
				"signal_COURANT_inds02"=> 191,
				"signal_TEMPERAT_inds01"=> 79,
				"signal_TEMPERAT_inds02"=> 100
			},
			{
				"signal_COURANT_inds01"=> 107,
				"signal_COURANT_inds02"=> 118,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 152
			},
			{
				"signal_COURANT_inds01"=> 107,
				"signal_COURANT_inds02"=> 116,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 82
			}

			]
	}
]
        return $this->json($chaussures);
    }
}
