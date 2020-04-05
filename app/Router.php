<?php

require '../app/Request.php';
require '../app/controllers/MiscController.php';

class Router
{
    protected $routes = [
        'GET' => [
            '/' => 'MiscController@index',
            'todos' => 'TodoController@index',
        ],
        'POST' => [
            '/todos/create' => 'TodoController@store'
        ]
    ];

    public function direct()
    {
        $url = Request::url();
        $method = Request::method();
        
        if (array_key_exists($url, $this->routes[$method])) {
            [$controllerName, $controllerMethod] = explode('@', $this->routes[$method][$url]);
            self::executeController($controllerName, $controllerMethod);
        }
    }

    private static function executeController($controllerName, $method)
    {
        if (file_exists('../app/controllers/' . $controllerName . '.php')) {
            (new $controllerName)->$method();
        } else {
            echo 'File not found';
        }
    }
}
