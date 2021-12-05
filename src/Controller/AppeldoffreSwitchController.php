<?php

namespace App\Controller;

use App\Entity\AppeldoffreSwitch;
use App\Form\AppeldoffreSwitchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appeldoffre/switch")
 */
class AppeldoffreSwitchController extends AbstractController
{
    /**
     * @Route("/", name="appeldoffre_switch_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $appeldoffreSwitches = $entityManager
            ->getRepository(AppeldoffreSwitch::class)
            ->findAll();

        return $this->render('appeldoffre_switch/index.html.twig', [
            'appeldoffre_switches' => $appeldoffreSwitches,
        ]);
    }

    /**
     * @Route("/new", name="appeldoffre_switch_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $appeldoffreSwitch = new AppeldoffreSwitch();
        $form = $this->createForm(AppeldoffreSwitchType::class, $appeldoffreSwitch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($appeldoffreSwitch);
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_switch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_switch/new.html.twig', [
            'appeldoffre_switch' => $appeldoffreSwitch,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_switch_show", methods={"GET"})
     */
    public function show(AppeldoffreSwitch $appeldoffreSwitch): Response
    {
        return $this->render('appeldoffre_switch/show.html.twig', [
            'appeldoffre_switch' => $appeldoffreSwitch,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="appeldoffre_switch_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AppeldoffreSwitch $appeldoffreSwitch, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AppeldoffreSwitchType::class, $appeldoffreSwitch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('appeldoffre_switch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('appeldoffre_switch/edit.html.twig', [
            'appeldoffre_switch' => $appeldoffreSwitch,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="appeldoffre_switch_delete", methods={"POST"})
     */
    public function delete(Request $request, AppeldoffreSwitch $appeldoffreSwitch, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appeldoffreSwitch->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appeldoffreSwitch);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appeldoffre_switch_index', [], Response::HTTP_SEE_OTHER);
    }
}
