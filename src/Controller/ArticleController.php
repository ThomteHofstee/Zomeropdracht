<?php

namespace App\Controller;

use App\Entity\Leerlingen;
use Doctrine\ORM\EntityManagerInterface;
use Michelf\MarkdownInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
        public function homepage(): Response
        {
            return $this->render('article/homepage.html.twig');
        }

        /**
         * @Route("/news/{slug}", name="article_show")
         */
        public function show($slug, MarkdownInterface $markdown, AdapterInterface $cache,EntityManagerInterface $em)
        {


            $repository = $em->getRepository(Leerlingen::class);
            /** @var leerlingen $leerlingen */
            $leerlingen = $repository->findAll();


            dump($leerlingen);


            return $this->render('article/show.html.twig',[
                'leerlingen' => $leerlingen,
            ]);
        }

        /**
        *  @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
        */
        public function toggleArticleHeart($slug, LoggerInterface  $logger)
        {
            $logger->info('Article is being hearted');


            return new JsonResponse(['hearts' => rand(5, 100)]);
        }
}