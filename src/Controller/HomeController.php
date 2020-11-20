<?php


namespace App\Controller;

// je dit que je doit lier Service/ArticleHelper a ma page
use App\Services\ArticlesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
//page d accueil
    /**
     * @Route("/", name="index")
     */
    public function home(){

         //j apelle ma metode last3 depuis Articlehelper


        $articlehelper = new ArticlesHelper();
        $last3article= $articlehelper->last3();


        return $this->render("index.html.twig",[
            "last3article"=>$last3article,

        ]);

    }

}