<?php

namespace App\Controller;

use App\Entity\AppeldoffreRouteur;
use App\Form\AppeldoffreRouteurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appeldoffre/routeur")
 */
class AppeldoffreRouteurController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffre_routeur_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $appeldoffreRouteurs = $entityManager
            ->getRepository(AppeldoffreRouteur::class)
            ->findAll();

        return $this->render('appeldoffre_routeur/index.html.twig', [
            'appeldoffre_routeurs' => $appeldoffreRouteurs,
        ]);
    }

    /**
     * @Route("/new", name="appeldoffre_routeur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appeldoffreRouteur = new AppeldoffreRouteur();
        $form = $this->createForm(AppeldoffreRouteurType::class, $appeldoffreRouteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appeldoffreRouteur);
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_routeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_routeur/new.html.twig', [
            'appeldoffre_routeur' => $appeldoffreRouteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_routeur_show", methods={"GET"})
     */
    public function show(AppeldoffreRouteur $appeldoffreRouteur): Response
    {
        return $this->render('appeldoffre_routeur/show.html.twig', [
            'appeldoffre_routeur' => $appeldoffreRouteur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appeldoffre_routeur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AppeldoffreRouteur $appeldoffreRouteur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppeldoffreRouteurType::class, $appeldoffreRouteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_routeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_routeur/edit.html.twig', [
            'appeldoffre_routeur' => $appeldoffreRouteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_routeur_delete", methods={"POST"})
     */
    public function delete(Request $request, AppeldoffreRouteur $appeldoffreRouteur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appeldoffreRouteur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appeldoffreRouteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appeldoffre_routeur_index', [], Response::HTTP_SEE_OTHER);
    }
}
