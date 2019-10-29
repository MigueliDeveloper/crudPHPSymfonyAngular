<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {

    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage() {

        return $this->render('article/hommepage.html.twig');
    }

    /**
     * @Route("/noticias/{slug}", name="article_show")
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