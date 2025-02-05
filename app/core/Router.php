<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function add($method, $uri, $controller) {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
        ];
    }
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                return $this->callAction(...explode('@', $route['controller']));
            }
        }
        echo "yeep ".http_response_code(404)."but =>  "."❌";
    }
    protected function callAction($controller, $action) {
        $controller = "App\\Controllers\\$controller";
        if (!class_exists($controller)) {
            die("❌ Contrôleur `$controller` non trouvé !");
        }
        $controller = new $controller();
        if (!method_exists($controller, $action)) {
            die("❌ Méthode `$action` non trouvée dans `$controller` !");
        }
        $controller->$action();
    }
}