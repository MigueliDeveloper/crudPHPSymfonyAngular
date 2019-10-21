<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController {

    /**
     * @Route("/")
     */

    public function homepage() {

        return new Response('OMG! My first page already! Wooo!');
    }

    /**
     * @Route("/noticias/{slug}")
     */

    public function show($slug) {

        return new Response(sprintf(
            'Futura página sobre las últimas noticias de: %s', 
            $slug
        ));

    }

}

?>