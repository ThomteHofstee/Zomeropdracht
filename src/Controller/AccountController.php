<?php

namespace App\Controller;

use Doctrine\ORM\Query\Expr\Base;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="app_account")
     */
    public function index(LoggerInterface $logger): Response
    {
        $logger->debug('Bekijk de informatie van '.$this->getUser()->getUsername());

        return $this->render('account/index.html.twig', [

        ]);
    }
}
