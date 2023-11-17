<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Repository\FactureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/factures')]
class FactureController extends AbstractController
{
    #[Route('/', name: 'facture_index', methods: ['GET'])]
    public function index(FactureRepository $factureRepository): Response
    {
        $factures = $factureRepository->findAll();

        return $this->render('facture/index.html.twig', [
            'factures' => $factures,
        ]);
    }

    #[Route('/{id}', name: 'facture_show', methods: ['GET'])]
    public function show(Facture $facture): Response
    {
        return $this->render('facture/show.html.twig', [
            'facture' => $facture,
        ]);
    }
}
