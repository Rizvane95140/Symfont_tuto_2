<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setNom("Rex")
            ->setDescription("Gentil Chien")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false);;

        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setDescription("Gentil Chien")
            ->setImage("cochon.png")
            ->setPoids(10)
            ->setDangereux(false);

        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Rex")
            ->setDescription("Gentil Chien")
            ->setImage("Serpent.png")
            ->setPoids(5)
            ->setDangereux(true);

        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Crocodile")
            ->setDescription("Gentil Croco")
            ->setImage("croco.png")
            ->setPoids(500)
            ->setDangereux(false);

        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Requin")
            ->setDescription("Requin")
            ->setImage("requin.png")
            ->setPoids(800)
            ->setDangereux(true);

        $manager->persist($a5);


        $manager->flush();
    }
}
