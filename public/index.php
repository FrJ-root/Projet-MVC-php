<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Core\Database;
use App\Core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
Database::init();
$router = new Router();
require __DIR__ . '/../App/config/routes.php';
$router->dispatch();