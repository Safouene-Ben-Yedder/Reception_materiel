<?php

namespace App\Controller;

use App\Entity\AppeldoffreImprimente;
use App\Form\AppeldoffreImprimenteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/accueil")
 */
class AppeldoffreImprimenteController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {


        return $this->render('Accueil/accueil.html.twig');
    }
}