<?php
namespace App\Controllers\Front;
use App\Core\Controller;
use App\Models\Article;

class HomeController extends Controller {
    // public function index() {
    //     $articles = [
    //         ['title' => 'Article 1', 'content' => 'Contenu du premier article'],
    //         ['title' => 'Article 2', 'content' => 'Contenu du deuxième article'],
    //     ];
    //     $this->render('front/home.twig', [
    //         'title' => 'Bienvenue sur Youdemy',
    //         'articles' => $articles
    //     ]);
    // }
    public function index() {
        $articleModel = new Article();
        $articles = $articleModel->getAllArticles();
        $this->render('front/home.twig', [
            'title' => 'Bienvenue sur Youdemy',
            'articles' => $articles
        ]);
    }
}