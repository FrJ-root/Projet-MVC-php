<?php
use App\Controllers\Front\HomeController;

$router->addRoute('GET', '/', HomeController::class, 'index');