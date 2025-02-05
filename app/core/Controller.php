<?php
namespace App\Core;

class Controller {
    protected function render($view, $data = []) {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../app/views');
        $twig = new \Twig\Environment($loader);
        echo $twig->render($view, $data);
    }
}