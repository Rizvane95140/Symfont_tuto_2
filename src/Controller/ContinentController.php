<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $continentRepository)
    {
        $continents = $continentRepository->findAll();

        return $this->render('continent/continents.html.twig', [
            'continents' => $continents
        ]);
    }

    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function afficher_continent(Continent $continent, $id)
    {
        return $this->render('continent/afficher_continent.html.twig', [
            'continent' => $continent
        ]);
    }

}
