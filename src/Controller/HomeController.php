<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\BienRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(BienRepository $bienRepository)
    {
        // Récupérez les biens depuis la base de données
        $biens = $bienRepository->findAll();

        $title = 'Annonces';
        return $this->render('home/index.html.twig', [
            'title' => $title,
            'biens' => $biens
        ]);
    }

    #[Route('/detail/{id}', name: 'detail')]
    public function bienById(
        BienRepository         $bienRepository,
        int                    $id,
        EntityManagerInterface $entityManager,
        Request                $request,
        Security               $security
    )
    {
        $reservation = new Reservation();
        $facture = null;

        // Récupère les données du bien
        $bien = $bienRepository->find($id);

        // Vérifie si le bien existe
        if (!$bien) {
            throw $this->createNotFoundException('Le Bien que vous cherchez n\'existe pas.');
        }

        // Récupère l'utilisateur connecté
        $user = $security->getUser();

        // Vérifie si le formulaire de réservation doit être affiché (utilisateur connecté)
        $showReservationForm = ($user !== null);

        if ($showReservationForm) {
            $reservation->setBien($bien);
            $reservation->setUser($user);

            $reservationForm = $this->createForm(ReservationType::class, $reservation);

            // Manipule la soumission du formulaire
            $reservationForm->handleRequest($request);

            // Vérifie si le formulaire a été soumis et est valide
            if ($reservationForm->isSubmitted() && $reservationForm->isValid()) {
                // Récupère les données soumises
                $formData = $reservationForm->getData();

                // Créez une nouvelle instance de l'entité Facture
                $facture = new Facture();
                $facture->setTotal($formData->getTotal());
                $facture->setDateDebut($formData->getDateDebut());
                $facture->setDateFin($formData->getDateFin());

                // Récupérez le nom de l'utilisateur connecté
                $nomUtilisateur = $this->getUser()->getUserIdentifier();
                $facture->setNom($nomUtilisateur);

                // Persister la facture en base de données
                $entityManager->persist($facture);
                $entityManager->flush();

                // Ajouter la réservation
                $entityManager->persist($reservation);
                $entityManager->flush();

                // Créer une session Stripe et récupérer l'ID de session
                try {
                    $sessionId = $this->createStripeCheckoutSession($facture->getTotal());
                } catch (ApiErrorException $e) {
                    // Gérer les erreurs Stripe
                    $this->addFlash('error', 'Erreur lors de la création de la session de paiement Stripe.');
                    return $this->redirectToRoute('index');
                }

                return $this->render('home/detail.html.twig', [
                    'bien' => $bien,
                    'reservationForm' => $reservationForm ? $reservationForm->createView() : null,
                    'showReservationForm' => $showReservationForm,
                    'facture' => $facture,
                    'stripeSessionId' => $sessionId,
                ]);
            }
        } else {
            // L'utilisateur n'est pas connecté, le formulaire ne doit pas être affiché
            $reservationForm = null;
        }

        return $this->render('home/detail.html.twig', [
            'bien' => $bien,
            'reservationForm' => $reservationForm ? $reservationForm->createView() : null,
            'showReservationForm' => $showReservationForm,
            'facture' => $facture,
        ]);
    }
    /**
     * Crée une session de paiement Stripe et retourne l'ID de session.
     *
     * @param int $amount Montant total en centimes
     *
     * @return string ID de session Stripe
     *
     * @throws ApiErrorException En cas d'erreur lors de l'appel à l'API Stripe
     */
    private function createStripeCheckoutSession(int $amount): string
    {
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Réservation de bien',
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('index', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('index', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        var_dump($session);
        return $session->id;
    }

    #[Route('/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    #[Route('/generate-pdf/{id}', name: 'generate_pdf')]
    public function generatePdf(int $id, EntityManagerInterface $entityManager, Dompdf $dompdf): Response
    {
        // Récupérez la facture depuis la base de données en fonction de son ID
        $facture = $entityManager->getRepository(Facture::class)->find($id);

        if (!$facture) {
            throw $this->createNotFoundException('La facture n\'existe pas.');
        }

        // Créez une instance de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf->setOptions($options);

        // Créez le contenu HTML du PDF en utilisant votre template Twig
        $html = $this->renderView('facture/pdf.html.twig', [
            'facture' => $facture,
        ]);

        // Chargez le contenu HTML dans Dompdf
        $dompdf->loadHtml($html);

        // Générez le PDF
        $dompdf->render();

        // Obtenez le contenu du PDF généré
        $pdfContent = $dompdf->output();

        // Créez une réponse Symfony pour le fichier PDF
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="facture.pdf"');

        return $response;
    }
}
