<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/categories", name="categories", methods={"GET"})
     */
    public function listeCategorie(CategorieRepository $repo){ 

     
        return $this->render('categorie/listeCategories.html.twig', [

            'lesCategories' => $repo->findAll()

        ]);
    }


}
