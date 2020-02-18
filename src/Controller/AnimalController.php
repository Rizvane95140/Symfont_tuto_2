<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $animalRepository)
    {
        $animaux = $animalRepository->findAll();

        return $this->render('animal/index.html.twig', [
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/animal/{id}", name="afficher_animal")
     */
    public function afficherAnimal(AnimalRepository $animalRepository, $id)
    {
        $animal = $animalRepository->find($id);

        return $this->render('animal/animal.html.twig',
        [
            "animal" => $animal
        ]);
    }
}
