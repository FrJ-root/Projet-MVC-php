<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Controllers\Front\HomeController;
use App\Core\Database;
use App\Core\Router;
use App\Core\Auth;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

Database::init();

$router = new Router();
$router->addRoute('GET', '/', 'App\Controllers\Front\HomeController', 'index');
$router->addRoute('GET', '/home', 'App\Controllers\Front\HomeController', 'home');
$router->addRoute('GET', '/redirectedHome', 'App\Controllers\Front\HomeController', 'redirectedHome');
$router->dispatch();