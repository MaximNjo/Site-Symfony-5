<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function listeContact()
    {
        $manager=$this->getDoctrine()->getManager();
        $repo=$manager->getRepository(Contact::class);
        $Contacts=$repo->findAll();
        return $this->render('contacts/listeContacts.html.twig',[

            'lesContacts' => $Contacts
        ]);
    }
}
