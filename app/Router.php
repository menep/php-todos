<?php

require '../app/controllers/MiscController.php';

use App\Request;

class Router
{
    protected $routes = [
        'GET' => [
            '/' => 'MiscController@index',
            '/todos' => 'TodosController@index',
            '/todos/create' => 'TodosController@create'
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
            (new MiscController)->notFound();
        }
    }

    private static function executeController($controllerName, $method)
    {
        if (file_exists('../app/controllers/' . $controllerName . '.php')) {
            (new $controllerName)->$method();
        } else {
            echo 'Whoops! There was an error processing your request...';
        }
    }
}
