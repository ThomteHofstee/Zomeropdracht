<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
        public function homepage(): Response
        {
            return new Response('omg my first page already');
        }

        /**
         * @Route("/news/{slug}")
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