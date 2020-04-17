<?php

namespace App\Core;

use App\Controllers;

class Router
{
    protected $routes = [
        'GET' => [
            '/' => 'MiscController@index',
            '/todos' => 'TodosController@index',
            '/todos/create' => 'TodosController@create',
            '/todos/id' => 'TodosController@show'
        ],
        'POST' => [
            '/todos/create' => 'TodosController@store'
        ]
    ];

    public function direct()
    {
        $url = Request::url();
        $method = Request::method();
        
        if (array_key_exists($url, $this->routes[$method])) {
            [$controllerName, $controllerMethod] = explode('@', $this->routes[$method][$url]);
            self::executeController($controllerName, $controllerMethod);
        } else {
            (new Controllers\MiscController)->notFound();
        }
    }

    private static function executeController($controllerName, $method)
    {
        if (file_exists('../app/controllers/' . $controllerName . '.php')) {
            // TODO: check if namespace can be removed from string
            $namespacedControllerName = "App\\Controllers\\{$controllerName}";
            
            (new $namespacedControllerName)->$method();
        } else {
            echo 'Whoops! There was an error processing your request...';
        }
    }

    public function redirect($url)
    {
        // TODO: use session and header()
        [$controllerName, $controllerMethod] = explode('@', $this->routes['GET'][$url]);
        self::executeController($controllerName, $controllerMethod);
    }
}
