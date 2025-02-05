<?php
namespace App\Core;

class Router {
    private $routes = [];
    public function addRoute($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }
    public function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestUri = str_replace('/Public', '', $requestUri);
    
        echo "Request Method: $requestMethod, URI: $requestUri<br>"; // Debugging output
    
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                $controller = new $route['controller']();
                $action = $route['action'];
                $controller->$action();
                return;
            }
        }
        http_response_code(404);
        echo 'Page non trouvée';
    }
}