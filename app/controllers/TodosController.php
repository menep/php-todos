<?php

namespace App\Controllers;

use App\Core\Router;
use App\Core\Query;
use App\Core\Request;
use App\Models\Todo;

class TodosController
{
    public function index()
    {
        $fetchedTodos = Query::execute('SELECT * FROM todos;')->fetchAll();
        
        require '../resources/views/todos/index.todos.php';
    }

    public function create()
    {
        require '../resources/views/todos/create.todos.php';
    }

    public function store()
    {
        try {
            Todo::save(Request::payload());
            $_SESSION['success'] = true;
            (new Router)->redirect('/todos/create');
        } catch (\Throwable $th) {
            // TODO: handle error properly
            (new Router)->redirect('/todos/create');
        }
    }
}
