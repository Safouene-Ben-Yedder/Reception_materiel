<?php

namespace App\Controller;

use App\Entity\OffredappelPcsds;
use App\Form\OffredappelPcsdsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offredappel/pcsds")
 */
class OffredappelPcsdsController extends AbstractController
{
    /**
     * @Route("/", name="offredappel_pcsds_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offredappelPcsds = $entityManager
            ->getRepository(OffredappelPcsds::class)
            ->findAll();

        return $this->render('offredappel_pcsds/index.html.twig', [
            'offredappel_pcsds' => $offredappelPcsds,
        ]);
    }

    /**
     * @Route("/new", name="offredappel_pcsds_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offredappelPcsd = new OffredappelPcsds();
        $form = $this->createForm(OffredappelPcsdsType::class, $offredappelPcsd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offredappelPcsd);
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_pcsds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_pcsds/new.html.twig', [
            'offredappel_pcsd' => $offredappelPcsd,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_pcsds_show", methods={"GET"})
     */
    public function show(OffredappelPcsds $offredappelPcsd): Response
    {
        return $this->render('offredappel_pcsds/show.html.twig', [
            'offredappel_pcsd' => $offredappelPcsd,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offredappel_pcsds_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffredappelPcsds $offredappelPcsd, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffredappelPcsdsType::class, $offredappelPcsd);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_pcsds_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_pcsds/edit.html.twig', [
            'offredappel_pcsd' => $offredappelPcsd,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_pcsds_delete", methods={"POST"})
     */
    public function delete(Request $request, OffredappelPcsds $offredappelPcsd, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offredappelPcsd->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offredappelPcsd);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offredappel_pcsds_index', [], Response::HTTP_SEE_OTHER);
    }
}
