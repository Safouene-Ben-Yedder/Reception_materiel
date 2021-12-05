<?php

namespace App\Controller;

use App\Entity\OffredappelRouteur;
use App\Form\OffredappelRouteurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offredappel/routeur")
 */
class OffredappelRouteurController extends AbstractController
{
    /**
     * @Route("/", name="offredappel_routeur_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offredappelRouteurs = $entityManager
            ->getRepository(OffredappelRouteur::class)
            ->findAll();

        return $this->render('offredappel_routeur/index.html.twig', [
            'offredappel_routeurs' => $offredappelRouteurs,
        ]);
    }

    /**
     * @Route("/new", name="offredappel_routeur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offredappelRouteur = new OffredappelRouteur();
        $form = $this->createForm(OffredappelRouteurType::class, $offredappelRouteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offredappelRouteur);
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_routeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_routeur/new.html.twig', [
            'offredappel_routeur' => $offredappelRouteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_routeur_show", methods={"GET"})
     */
    public function show(OffredappelRouteur $offredappelRouteur): Response
    {
        return $this->render('offredappel_routeur/show.html.twig', [
            'offredappel_routeur' => $offredappelRouteur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offredappel_routeur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffredappelRouteur $offredappelRouteur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffredappelRouteurType::class, $offredappelRouteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_routeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_routeur/edit.html.twig', [
            'offredappel_routeur' => $offredappelRouteur,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_routeur_delete", methods={"POST"})
     */
    public function delete(Request $request, OffredappelRouteur $offredappelRouteur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offredappelRouteur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offredappelRouteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offredappel_routeur_index', [], Response::HTTP_SEE_OTHER);
    }
}
