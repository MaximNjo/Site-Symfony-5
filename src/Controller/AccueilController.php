<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil", methods={"GET"})
     */
    public function index(){ 

        $noms = ["Sarr","MLB"];
        $age = 19;
        return $this->render('accueil/index.html.twig',[

            'lesNom' => $noms,
            'age' -> $age
        ]);
    }


}
