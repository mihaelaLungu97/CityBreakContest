<?php

namespace App\Controller;

use App\Entity\CityBreakDetails;
use App\Form\CityBreakDetailsType;
use App\Repository\CityBreakDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/city/break/details")
 */
class CityBreakDetailsController extends AbstractController
{
    /**
     * @Route("/", name="city_break_details_index", methods={"GET"})
     */
    public function index(CityBreakDetailsRepository $cityBreakDetailsRepository): Response
    {
        return $this->render('city_break_details/index.html.twig', [
            'city_break_details' => $cityBreakDetailsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="city_break_details_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cityBreakDetail = new CityBreakDetails();
        $form = $this->createForm(CityBreakDetailsType::class, $cityBreakDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cityBreakDetail);
            $entityManager->flush();

            return $this->redirectToRoute('city_break_details_index');
        }

        return $this->render('city_break_details/new.html.twig', [
            'city_break_detail' => $cityBreakDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="city_break_details_show", methods={"GET"})
     */
    public function show(CityBreakDetails $cityBreakDetail): Response
    {
        return $this->render('city_break_details/show.html.twig', [
            'city_break_detail' => $cityBreakDetail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="city_break_details_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CityBreakDetails $cityBreakDetail): Response
    {
        $form = $this->createForm(CityBreakDetailsType::class, $cityBreakDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('city_break_details_index');
        }

        return $this->render('city_break_details/edit.html.twig', [
            'city_break_detail' => $cityBreakDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="city_break_details_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CityBreakDetails $cityBreakDetail): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cityBreakDetail->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cityBreakDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('city_break_details_index');
    }
    public function _toString(){
        return(string)$this->getId();
    }
}
