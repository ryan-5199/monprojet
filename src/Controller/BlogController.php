<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page}", name="blog_list" , requirements={"page"="\d+"})
     */
    public function list(int $page = 1) {
        return $this->render('blog/list.html.twig', [
            'page' => $page
        ]);

    }
}

