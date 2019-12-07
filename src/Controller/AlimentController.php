<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Repository\AlimentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AlimentController extends AbstractController
{
    /**
     * @Route("/", name="aliments")
     */
    public function aliments(AlimentRepository $repository)
    {
        $aliments = $repository->findAll();
        return $this->render('aliment/index.html.twig', [
            'controller_name' => 'AlimentController',
            'aliments' => $aliments,
            'isCalorie' => false,
            'isGlucide' => false,
        ]);
    }

    /**
     * @Route("/aliment/{id}", name="afficher_aliment")
     */
    public function aliment(Aliment $aliment)
    {
        return $this->render('aliment/aliment.html.twig', [
            'controller_name' => 'AlimentController',
            'aliment' => $aliment,
            'isCalorie' => false,
            'isGlucide' => false,
        ]);
    }

    /**
     * @Route("/aliments/calories/{calorie}", name="aliments_par_calories")
     */
    public function alimentsParCalories(AlimentRepository $repository, $calorie)
    {
        $aliments = $repository->getAlimentsParPropriete('calorie', '<', $calorie);
        return $this->render('aliment/index.html.twig', [
            'controller_name' => 'AlimentController',
            'aliments' => $aliments,
            'isCalorie' => true,
            'isGlucide' => false,
        ]);
    }

    /**
     * @Route("/aliments/glucides/{glucide}", name="aliments_par_glucides")
     */
    public function alimentsParGlucides(AlimentRepository $repository, $glucide)
    {
        $aliments = $repository->getAlimentsParPropriete('glucide', '<', $glucide);
        return $this->render('aliment/index.html.twig', [
            'controller_name' => 'AlimentController',
            'aliments' => $aliments,
            'isCalorie' => false,
            'isGlucide' => true,
        ]);
    }
}
