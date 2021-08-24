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
     * @Route("/admin/article/new")
     */
    public function new(EntityManagerInterface $em)
    {
        $leerlingen = new Leerlingen();
        $leerlingen->setVoornaam('Thom')
            ->setTussenvoegsel('de-leerlingenlijst-van-2021/2022'.rand(100,999));


        if(rand(1, 10) > 2)
        {
            $leerlingen->setAchternaam('Hofstee');
        }


        $em->persist($leerlingen);




        return new Response(sprintf(
            'Hiya! new article id: #$d voornaam: %s',
            $leerlingen->getId(),
            $leerlingen->getVoornaam(),
            $leerlingen->getAchternaam()
        ));
    }
}
