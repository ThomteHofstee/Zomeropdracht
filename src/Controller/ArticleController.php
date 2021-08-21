<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        public function show($slug)
        {
            $comments = [
                    'dat vond ik cool',
                    'doe je goed',
                    'ik hou van bacon',
                ];



            return $this->render('article/show.html.twig',[
                'title' => ucwords(str_replace('-','',$slug)),
                'comments' => $comments,
            ]);

        }
}