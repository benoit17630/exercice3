<?php


namespace App\Controller;


use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{



// page de tous les articles
    /**
     * @Route ("/articles", name="articles")
     */
    public function articles(){

//j apelle ma constante depuis Service/ArticleHelper
        $articles = ArticlesHelper::articles;

        return $this->render("articles.html.twig",[

            "articles"=> $articles
        ]);
    }
//page d un article
    /**
     * @Route ("/article/{id}" ,name="article")
     * @param $id
     * @return Response
     */

    public function article($id):Response{

        $articles = ArticlesHelper::articles;

        $article= $articles[$id];

        return $this->render("article.html.twig",[
            "article"=> $article,

        ]);
    }
}