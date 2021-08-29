<?php

namespace App\Controller;

use App\Entity\Leerlingen;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeerlingAdminController extends AbstractController
{

    /**
     * @Route("/admin/leerlingenlijst/new")
     */
    public function new(EntityManagerInterface $em)
    {
        $leerlingen = new Leerlingen();

        $leerlingen->setVoornaam('Joost');
        $leerlingen->setAchternaam('Van den Berg');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Youssef');
        $leerlingen->setAchternaam('Ali');
        $em->persist($leerlingen);
        $em->flush();

        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Hugo');
        $leerlingen->setAchternaam('Bouwmeester');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Roan');
        $leerlingen->setAchternaam('Swagerman');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Mohammed');
        $leerlingen->setAchternaam('Al-khadid');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Jayden');
        $leerlingen->setAchternaam('Arabi');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Lucas');
        $leerlingen->setAchternaam('Greve');
        $em->persist($leerlingen);
        $em->flush();

        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Thom');
        $leerlingen->setAchternaam('Hofstee');
        $leerlingen->setTussenvoegsel('te');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Beau');
        $leerlingen->setAchternaam('Reijers');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Yimmie');
        $leerlingen->setAchternaam('van dubbelden');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Kevin');
        $leerlingen->setAchternaam('Vis');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Robbie');
        $leerlingen->setAchternaam('Graaf');
        $leerlingen->setTussenvoegsel('van de');
        $em->persist($leerlingen);
        $em->flush();


        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Dion');
        $leerlingen->setAchternaam('Boer');
        $em->persist($leerlingen);
        $em->flush();

        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Sven');
        $leerlingen->setAchternaam('Counette');
        $em->persist($leerlingen);
        $em->flush();

        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Ahmad');
        $leerlingen->setAchternaam('Darwich');
        $em->persist($leerlingen);
        $em->flush();

        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Jorden');
        $leerlingen->setAchternaam('Pultrum');
        $em->persist($leerlingen);
        $em->flush();

        dump($leerlingen);


        return new Response(sprintf(
            'Hiya! new article id: #%d voornaam: %s',
            $leerlingen->getId(),
            $leerlingen->getVoornaam()
        ));
    }
}


