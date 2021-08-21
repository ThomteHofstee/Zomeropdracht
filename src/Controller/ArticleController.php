<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
            return new Response(sprintf('Hier komt de opdracht van school %s',
            $slug
            ));
        }
}