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
 * @Route("/appeldoffre/imprimente")
 */
class AppeldoffreImprimenteController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffre_imprimente_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $appeldoffreImprimentes = $entityManager
            ->getRepository(AppeldoffreImprimente::class)
            ->findAll();

        return $this->render('appeldoffre_imprimente/index.html.twig', [
            'appeldoffre_imprimentes' => $appeldoffreImprimentes,
        ]);
    }

    /**
     * @Route("/new", name="appeldoffre_imprimente_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appeldoffreImprimente = new AppeldoffreImprimente();
        $form = $this->createForm(AppeldoffreImprimenteType::class, $appeldoffreImprimente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appeldoffreImprimente);
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_imprimente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_imprimente/new.html.twig', [
            'appeldoffre_imprimente' => $appeldoffreImprimente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_imprimente_show", methods={"GET"})
     */
    public function show(AppeldoffreImprimente $appeldoffreImprimente): Response
    {
        return $this->render('appeldoffre_imprimente/show.html.twig', [
            'appeldoffre_imprimente' => $appeldoffreImprimente,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appeldoffre_imprimente_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AppeldoffreImprimente $appeldoffreImprimente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppeldoffreImprimenteType::class, $appeldoffreImprimente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_imprimente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_imprimente/edit.html.twig', [
            'appeldoffre_imprimente' => $appeldoffreImprimente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_imprimente_delete", methods={"POST"})
     */
    public function delete(Request $request, AppeldoffreImprimente $appeldoffreImprimente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appeldoffreImprimente->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appeldoffreImprimente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appeldoffre_imprimente_index', [], Response::HTTP_SEE_OTHER);
    }
}
