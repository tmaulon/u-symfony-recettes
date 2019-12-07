<?php

namespace App\Controller\Admin;

use App\Entity\Aliment;
use App\Repository\AlimentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminAlimentController extends AbstractController
{
    /**
     * @Route("/admin/aliment", name="admin_aliment")
     */
    public function index(AlimentRepository $repository)
    {
        $aliments = $repository->findAll();
        return $this->render('admin/admin_aliment/adminAliment.html.twig', [
            'controller_name' => 'AdminAlimentController',
            'aliments' => $aliments
        ]);
    }

    /**
     * @Route("/admin/aliment/{id}", name="admin_aliment_modification")
     */
    public function modification(Aliment $aliment)
    {
        return $this->render('admin/admin_aliment/modificationAliment.html.twig', [
            'controller_name' => 'AdminAlimentController',
            'aliment' => $aliment
        ]);
    }
}
