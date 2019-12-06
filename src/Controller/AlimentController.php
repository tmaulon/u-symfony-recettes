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
            'aliments' => $aliments
        ]);
    }

    /**
     * @Route("/aliment/{id}", name="afficher_aliment")
     */
    public function aliment(Aliment $aliment)
    {
        return $this->render('aliment/aliment.html.twig', [
            'controller_name' => 'AlimentController',
            'aliment' => $aliment
        ]);
    }
}
