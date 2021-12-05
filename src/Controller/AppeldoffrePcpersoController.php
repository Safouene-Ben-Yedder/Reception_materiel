<?php

namespace App\Controller;

use App\Entity\AppeldoffrePcperso;
use App\Form\AppeldoffrePcpersoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appeldoffre/pcperso")
 */
class AppeldoffrePcpersoController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffre_pcperso_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $appeldoffrePcpersos = $entityManager
            ->getRepository(AppeldoffrePcperso::class)
            ->findAll();

        return $this->render('appeldoffre_pcperso/index.html.twig', [
            'appeldoffre_pcpersos' => $appeldoffrePcpersos,
        ]);
    }

    /**
     * @Route("/new", name="appeldoffre_pcperso_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appeldoffrePcperso = new AppeldoffrePcperso();
        $form = $this->createForm(AppeldoffrePcpersoType::class, $appeldoffrePcperso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appeldoffrePcperso);
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_pcperso_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_pcperso/new.html.twig', [
            'appeldoffre_pcperso' => $appeldoffrePcperso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_pcperso_show", methods={"GET"})
     */
    public function show(AppeldoffrePcperso $appeldoffrePcperso): Response
    {
        return $this->render('appeldoffre_pcperso/show.html.twig', [
            'appeldoffre_pcperso' => $appeldoffrePcperso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appeldoffre_pcperso_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AppeldoffrePcperso $appeldoffrePcperso, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppeldoffrePcpersoType::class, $appeldoffrePcperso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_pcperso_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_pcperso/edit.html.twig', [
            'appeldoffre_pcperso' => $appeldoffrePcperso,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_pcperso_delete", methods={"POST"})
     */
    public function delete(Request $request, AppeldoffrePcperso $appeldoffrePcperso, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appeldoffrePcperso->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appeldoffrePcperso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appeldoffre_pcperso_index', [], Response::HTTP_SEE_OTHER);
    }
}
