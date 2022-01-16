<?php

namespace App\DataFixtures;

use App\Entity\Api;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DataFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $mesures = [
            [
                "signal_COURANT_inds01"=> 291,
				"signal_COURANT_inds02"=> 111,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 60.5555
            ],
            [
				"signal_COURANT_inds01"=> 211,
				"signal_COURANT_inds02"=> 400,
				"signal_TEMPERAT_inds01"=> 180,
				"signal_TEMPERAT_inds02"=> 55
            ],
            [
				"signal_COURANT_inds01"=> 564,
				"signal_COURANT_inds02"=> 140,
				"signal_TEMPERAT_inds01"=> 100,
				"signal_TEMPERAT_inds02"=> 70
            ],
            [
				"signal_COURANT_inds01"=> 100,
				"signal_COURANT_inds02"=> 290,
				"signal_TEMPERAT_inds01"=> 114,
				"signal_TEMPERAT_inds02"=> 144
            ],
            [
				"signal_COURANT_inds01"=> 300,
				"signal_COURANT_inds02"=> 141,
				"signal_TEMPERAT_inds01"=> 80,
				"signal_TEMPERAT_inds02"=> 40
            ],
            [
				"signal_COURANT_inds01"=> 290,
				"signal_COURANT_inds02"=> 111,
				"signal_TEMPERAT_inds01"=> 184,
				"signal_TEMPERAT_inds02"=> 66
            ],
            [
				"signal_COURANT_inds01"=> 136,
				"signal_COURANT_inds02"=> 263,
				"signal_TEMPERAT_inds01"=> 141,
				"signal_TEMPERAT_inds02"=> 53
            ],
            [
				"signal_COURANT_inds01"=> 164,
				"signal_COURANT_inds02"=> 191,
				"signal_TEMPERAT_inds01"=> 79,
				"signal_TEMPERAT_inds02"=> 100
            ],
            [
				"signal_COURANT_inds01"=> 107,
				"signal_COURANT_inds02"=> 118,
				"signal_TEMPERAT_inds01"=> 70,
				"signal_TEMPERAT_inds02"=> 152
            ],
            [
				"signal_COURANT_inds01"=> 107,
				"signal_COURANT_inds02"=> 246,
				"signal_TEMPERAT_inds01"=> 222,
				"signal_TEMPERAT_inds02"=> 82
            ],
            [
				"signal_COURANT_inds01"=> 407,
				"signal_COURANT_inds02"=> 106,
				"signal_TEMPERAT_inds01"=> 110,
				"signal_TEMPERAT_inds02"=> 82
            ],
        ];

        foreach ($mesures as $key => $mesure) {

            $api = new Api();
            $api->setSignalCOURANTInds01($mesure['signal_COURANT_inds01']);
            $api->setSignalCOURANTInds02($mesure['signal_COURANT_inds02']);
            $api->setSignalTEMPERATInds01($mesure['signal_TEMPERAT_inds01']);
            $api->setSignalTEMPERATInds01($mesure['signal_TEMPERAT_inds01']);
            # code...
            $manager->persis
        }
        $manager->flush();
    }
}
