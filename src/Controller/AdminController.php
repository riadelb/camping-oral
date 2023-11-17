<?php

namespace App\Controller;

use App\Entity\Bien;
use App\Entity\Type;
use App\Form\BienType;
use App\Repository\BienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    //methode pour voir les biens
    #[Route('/dashboard', name: 'app_admin')]
    public function index(BienRepository $bienRepository): Response
    {
        return $this->render('bien/index.html.twig', [
            'biens' => $bienRepository->findAll()
        ]);
    }

    //methode pour supprimer un bien
    #[Route('/delete/{id}', name: 'app_bien_delete')]
    public function delete(Request $request, Bien $bien, BienRepository $bienRepository)
    {
        if ($this->isCsrfTokenValid('delete' . $bien->getId(), $request->request->get('_token'))){
            $bienRepository->delete($bien, true);
        }
        return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
    }

    //methode pour ajouter un bien
    #[Route('/new', name: 'app_bien_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BienRepository $bienRepository)
    {
        $bien = new Bien();
        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            //gerer l'image
            $imageFile = $form->get('imagePath')->getData();
            if ($imageFile){
                //si une image est uploeader
                $originalFileName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                //on genere un nom unique de l'image
                $newFileName = $originalFileName . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    //on deplace l'image dans le dossier public/img
                    $imageFile->move(
                        $this->getParameter('bien_img_directory'),
                        $newFileName
                    );
                }catch (FileException $e){
                    $this->addFlash('danger', 'Une erreur est survenu lors de l\'upload de limage');
                }
                $bien->setImagePath($newFileName);
            }
            // recupere le type choisis
            $type = $bien->getType();
            //on donne l'id du type au bien
            if ($type !== null) {
                // Attribuer le type au bien
                $bien->setType($type);
            }
            //on enregistre le bien dans la bdd
            $bienRepository->save($bien, true);

            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);

        }
        return $this->renderForm('bien/new.html.twig', [
        'bien' => $bien,
        'form' => $form
    ]);
    }

    //methode pour modifier un bien
    #[Route('/edit/{id}', name: 'app_bien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bien $bien, BienRepository $bienRepository)
    {
        $form = $this->createForm(BienType::class, $bien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $imageFile = $form->get('imagePath')->getData();
            if ($imageFile){
                //si une image est uploeader
                $originalFileName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                //on genere un nom unique de l'image
                $newFileName = $originalFileName . '-' . uniqid() . '.' . $imageFile->guessExtension();
                try {
                    //on deplace l'image dans le dossier public/img
                    $imageFile->move(
                        $this->getParameter('bien_img_directory'),
                        $newFileName
                    );
                }catch (FileException $e){
                    $this->addFlash('danger', 'Une erreur est survenu lors de l\'upload de limage');
                }
                $bien->setImagePath($newFileName);
            }

            $bienRepository->save($bien, true);
            return $this->redirectToRoute('app_admin', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('bien/edit.html.twig', [
           'bien' => $bien,
           'form' => $form
        ]);
    }
}
