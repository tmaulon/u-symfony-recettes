<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Aliment();
        $a1->setNom('Carotte')
            ->setCalorie(36)
            ->setProteine(0.77)
            ->setGlucide(6.45)
            ->setLipide(0.26)
            ->setPrix(1.80)
            ->setImage('aliments/carotte.png');
        $manager->persist($a1);
        $a2 = new Aliment();
        $a2->setNom('Patate')
            ->setCalorie(80)
            ->setProteine(0.77)
            ->setGlucide(6.45)
            ->setLipide(0.26)
            ->setPrix(1.50)
            ->setImage('aliments/patate.jpg');
        $manager->persist($a2);
        $a3 = new Aliment();
        $a3->setNom('Tomate')
            ->setCalorie(18)
            ->setProteine(0.86)
            ->setGlucide(2.26)
            ->setLipide(0.24)
            ->setPrix(2.30)
            ->setImage('aliments/tomate.png');
        $manager->persist($a3);
        $a4 = new Aliment();
        $a4->setNom('Pomme')
            ->setCalorie(52)
            ->setProteine(0.25)
            ->setGlucide(11.6)
            ->setLipide(0.25)
            ->setPrix(2.35)
            ->setImage('aliments/pomme.png');
        $manager->persist($a4);

        $manager->flush();
    }
}
