<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contacts", name="contacts", methods={"GET"})
     */
    public function listeContact(ContactRepository $repo)
    {

        $Contacts = $repo->findAll();
        
        return $this->render('contacts/listeContacts.html.twig',[

            'lesContacts' => $Contacts
        ]);
    }

    /**
     * @Route("/contact/{id}", name="ficheContact", methods={"GET"})
     */
    public function ficheContact($id, ContactRepository $repo)
    {

        $Contacts = $repo->findAll();
        return $this->render('contacts/ficheContacts.html.twig',[

            'lesContacts' => $Contacts
        ]);
    }
}
