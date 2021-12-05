<?php

namespace App\Controller;

use App\Entity\OffredappelSwitch;
use App\Form\OffredappelSwitchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/offredappel/switch")
 */
class OffredappelSwitchController extends AbstractController
{
    /**
     * @Route("/", name="offredappel_switch_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offredappelSwitches = $entityManager
            ->getRepository(OffredappelSwitch::class)
            ->findAll();

        return $this->render('offredappel_switch/index.html.twig', [
            'offredappel_switches' => $offredappelSwitches,
        ]);
    }

    /**
     * @Route("/new", name="offredappel_switch_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offredappelSwitch = new OffredappelSwitch();
        $form = $this->createForm(OffredappelSwitchType::class, $offredappelSwitch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($offredappelSwitch);
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_switch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_switch/new.html.twig', [
            'offredappel_switch' => $offredappelSwitch,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_switch_show", methods={"GET"})
     */
    public function show(OffredappelSwitch $offredappelSwitch): Response
    {
        return $this->render('offredappel_switch/show.html.twig', [
            'offredappel_switch' => $offredappelSwitch,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="offredappel_switch_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OffredappelSwitch $offredappelSwitch, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OffredappelSwitchType::class, $offredappelSwitch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('offredappel_switch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offredappel_switch/edit.html.twig', [
            'offredappel_switch' => $offredappelSwitch,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="offredappel_switch_delete", methods={"POST"})
     */
    public function delete(Request $request, OffredappelSwitch $offredappelSwitch, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offredappelSwitch->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offredappelSwitch);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offredappel_switch_index', [], Response::HTTP_SEE_OTHER);
    }
}
