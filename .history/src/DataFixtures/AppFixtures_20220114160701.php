<?php

namespace App\DataFixtures;

use App\Entity\Api;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $ma)
    {
       
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $api = new Api();
            $api->setSignalCOURANTInds01(1)
            ->setSignalCOURANTInds02(4)
            ->setSignalTEMPERATInds01(3)
            ->setSignalTEMPERATInds02(5);
            $ma->persist($mesures);



        }

        $ma->flush();
    }
}