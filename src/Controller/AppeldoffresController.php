<?php

namespace App\Controller;

use App\Entity\AppeldoffreImprimente;
use App\Entity\AppeldoffreRouteur;
use App\Entity\AppeldoffreSwitch;
use App\Entity\AppeldoffrePcperso;
use App\Entity\AppeldoffrePcsds;




use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appeldoffres")
 */
class AppeldoffresController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffres_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
            $appeldoffreImprimentes = $entityManager
            ->getRepository(AppeldoffreImprimente::class)
            ->findAll();

            $appeldoffreRouteurs = $entityManager
            ->getRepository(AppeldoffreRouteur::class)
            ->findAll();

            $appeldoffreSwitches = $entityManager
            ->getRepository(AppeldoffreSwitch::class)
            ->findAll();

            $appeldoffrePcsdss = $entityManager
            ->getRepository(AppeldoffrePcsds::class)
            ->findAll();

            $appeldoffrePcpersos = $entityManager
            ->getRepository(AppeldoffrePcperso::class)
            ->findAll();



        return $this->render('appeldoffres/index.html.twig', [
            'appeldoffre_imprimentes' => $appeldoffreImprimentes,
            'appeldoffre_routeurs' => $appeldoffreRouteurs,
            'appeldoffre_switches' => $appeldoffreSwitches,
            'appeldoffre_Pcsdss' => $appeldoffrePcsdss,
            'appeldoffre_Pcpersos' => $appeldoffrePcpersos,
        ]);
    }

}
