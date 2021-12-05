<?php

namespace App\Controller;

use App\Entity\AppeldoffrePcsds;
use App\Form\AppeldoffrePcsdsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appeldoffre/pcsds")
 */
class AppeldoffrePcsdsController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffre_pcsds_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $appeldoffrePcsds = $entityManager
            ->getRepository(AppeldoffrePcsds::class)
            ->findAll();

        return $this->render('appeldoffre_pcsds/index.html.twig', [
            'appeldoffre_pcsds' => $appeldoffrePcsds,
        ]);
    }

    /**
     * @Route("/new", name="appeldoffre_pcsds_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appeldoffrePcsd = new AppeldoffrePcsds();
        $form = $this->createForm(AppeldoffrePcsdsType::class, $appeldoffrePcsd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appeldoffrePcsd);
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_pcsds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_pcsds/new.html.twig', [
            'appeldoffre_pcsd' => $appeldoffrePcsd,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_pcsds_show", methods={"GET"})
     */
    public function show(AppeldoffrePcsds $appeldoffrePcsd): Response
    {
        return $this->render('appeldoffre_pcsds/show.html.twig', [
            'appeldoffre_pcsd' => $appeldoffrePcsd,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appeldoffre_pcsds_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AppeldoffrePcsds $appeldoffrePcsd, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppeldoffrePcsdsType::class, $appeldoffrePcsd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_pcsds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_pcsds/edit.html.twig', [
            'appeldoffre_pcsd' => $appeldoffrePcsd,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_pcsds_delete", methods={"POST"})
     */
    public function delete(Request $request, AppeldoffrePcsds $appeldoffrePcsd, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appeldoffrePcsd->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appeldoffrePcsd);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appeldoffre_pcsds_index', [], Response::HTTP_SEE_OTHER);
    }
}
