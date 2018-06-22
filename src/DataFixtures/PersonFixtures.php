<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Person;

class PersonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i<=10; $i++) { 
            $person = new Person();
            $person->setFirstname('person_'.$i);

            $manager->persist($person);
        }


        $manager->flush();
    }
}
