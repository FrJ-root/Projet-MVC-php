<?php
namespace App\Controllers\Front;
use App\Core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home.twig');
    }
    public function home() {
        $this->render('home.twig');
    }
    public function redirectedHome() {
        $this->render('redirectedHome.twig');
    }
}