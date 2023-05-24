<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contact;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ContactsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Factory::create("fr_FR");

        $categorie = new Categorie();
        $categorie->setLibelle("Professionnel")
                  ->setDescription("azerty")
                  ->setImage("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tripadvisor.fr%2FTourism-g293773-Yaounde_Centre_Region-Vacations.html&psig=AOvVaw2u0M3e1wJX5oawt6Mwu59k&ust=1685022377245000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCLDFtdSLjv8CFQAAAAAdAAAAABAD/business");
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle("Sport")
                  ->setDescription("azerty")
                  ->setImage("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tripadvisor.fr%2FTourism-g293773-Yaounde_Centre_Region-Vacations.html&psig=AOvVaw2u0M3e1wJX5oawt6Mwu59k&ust=1685022377245000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCLDFtdSLjv8CFQAAAAAdAAAAABAD/sports");
        $manager->persist($categorie);

        $categorie = new Categorie();
        $categorie->setLibelle("Privé")
                  ->setDescription("azerty")
                  ->setImage("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tripadvisor.fr%2FTourism-g293773-Yaounde_Centre_Region-Vacations.html&psig=AOvVaw2u0M3e1wJX5oawt6Mwu59k&ust=1685022377245000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCLDFtdSLjv8CFQAAAAAdAAAAABAD/people");
       
        $manager->persist($categorie);



        $genres=["male","female"];
        
        for ($i=0; $i < 100 ; $i++) { 
            
            $sexe=mt_rand(0,1);
    
            if ($sexe == 0) {
                $type = "men";
            } else {
                $type = "women";
            }

            $contact = new Contact();
            $contact->setNom($faker->lastName())
                    ->setPrenom($faker->firstName($genres[$sexe]))
                    ->setRue($faker->streetAddress())
                    ->setCP($faker->numberBetween(75000,92000))
                    ->setVille($faker->city())
                    ->setMail($faker->email())
                    ->setSexe($sexe)
                    ->setAvatar("https://randomuser.me/api/portraits/".$type."/". $i. ".jpg");
            $manager->persist($contact);
        }



        $manager->flush();
    }
}
