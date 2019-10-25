<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {

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

        $comments = [
            'I ate a normal rock once, It did Not',
            'Woohoo!',
            'I like ',

        ];

       /* dump($slug, $this); */

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
           

    }

}

?>