<?php

namespace App\Controller;

use App\Entity\OffredappelPcperso;
use App\Form\OffredappelPcpersoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offredappel/pcperso")
 */
class OffredappelPcpersoController extends AbstractController
{
    /**
     * @Route("/", name="offredappel_pcperso_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offredappelPcpersos = $entityManager
            ->getRepository(OffredappelPcperso::class)
            ->findAll();

        return $this->render('offredappel_pcperso/index.html.twig', [
            'offredappel_pcpersos' => $offredappelPcpersos,
        ]);
    }

    /**
     * @Route("/new", name="offredappel_pcperso_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offredappelPcperso = new OffredappelPcperso();
        $form = $this->createForm(OffredappelPcpersoType::class, $offredappelPcperso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offredappelPcperso);
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_pcperso_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_pcperso/new.html.twig', [
            'offredappel_pcperso' => $offredappelPcperso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_pcperso_show", methods={"GET"})
     */
    public function show(OffredappelPcperso $offredappelPcperso): Response
    {
        return $this->render('offredappel_pcperso/show.html.twig', [
            'offredappel_pcperso' => $offredappelPcperso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offredappel_pcperso_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffredappelPcperso $offredappelPcperso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffredappelPcpersoType::class, $offredappelPcperso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_pcperso_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_pcperso/edit.html.twig', [
            'offredappel_pcperso' => $offredappelPcperso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_pcperso_delete", methods={"POST"})
     */
    public function delete(Request $request, OffredappelPcperso $offredappelPcperso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offredappelPcperso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offredappelPcperso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offredappel_pcperso_index', [], Response::HTTP_SEE_OTHER);
    }
}
