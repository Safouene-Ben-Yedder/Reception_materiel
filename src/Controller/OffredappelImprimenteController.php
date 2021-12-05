<?php

namespace App\Controller;

use App\Entity\OffredappelImprimente;
use App\Form\OffredappelImprimenteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offredappel/imprimente")
 */
class OffredappelImprimenteController extends AbstractController
{
    /**
     * @Route("/", name="offredappel_imprimente_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offredappelImprimentes = $entityManager
            ->getRepository(OffredappelImprimente::class)
            ->findAll();

        return $this->render('offredappel_imprimente/index.html.twig', [
            'offredappel_imprimentes' => $offredappelImprimentes,
        ]);
    }

    /**
     * @Route("/new", name="offredappel_imprimente_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offredappelImprimente = new OffredappelImprimente();
        $form = $this->createForm(OffredappelImprimenteType::class, $offredappelImprimente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offredappelImprimente);
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_imprimente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_imprimente/new.html.twig', [
            'offredappel_imprimente' => $offredappelImprimente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_imprimente_show", methods={"GET"})
     */
    public function show(OffredappelImprimente $offredappelImprimente): Response
    {
        return $this->render('offredappel_imprimente/show.html.twig', [
            'offredappel_imprimente' => $offredappelImprimente,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offredappel_imprimente_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffredappelImprimente $offredappelImprimente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffredappelImprimenteType::class, $offredappelImprimente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_imprimente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_imprimente/edit.html.twig', [
            'offredappel_imprimente' => $offredappelImprimente,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_imprimente_delete", methods={"POST"})
     */
    public function delete(Request $request, OffredappelImprimente $offredappelImprimente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offredappelImprimente->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offredappelImprimente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offredappel_imprimente_index', [], Response::HTTP_SEE_OTHER);
    }
}
