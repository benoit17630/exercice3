<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function home(){
// j appelle ma contante depuis ArticleController
        $articles = ArticleController::articles;

        $last3article=array_slice($articles,-3);
        return $this->render("index.html.twig",[
            "last3article"=>$last3article,

        ]);

    }

}