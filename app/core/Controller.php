<?php
namespace App\Core;

class Controller {
    protected function render($view, $data = []) {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../App/Views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render($view, $data);
    }
}