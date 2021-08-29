<?php

namespace App\Controller;

use App\Entity\Leerlingen;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginAdminController extends AbstractController
{

    /**
     * @Route("/admin/inloggegevens/new")
     */
    public function new(EntityManagerInterface $em)
    {
        $User = new User();

        $User->setEmail('admin@rocmondriaan.nl');
        $User->setPassword('admin');
        $User->setFirst('kees');
        $em->persist($User);
        $User->setRoles(['ROLE_ADMIN']);
        $em->flush();

        $User = new User();
        $User->setEmail('pietje@rocmondriaan.nl');
        $User->setPassword('pietje123');
        $User->setFirst('pietje');
        $em->persist($User);
        $em->flush();








        return new Response(sprintf(
            'Hiya! new article id: #%d voornaam: %s',
            $User->getId(),
            $User->getEmail()
        ));
    }
}