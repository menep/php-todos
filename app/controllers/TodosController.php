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
        $fetchedTodos = Query::execute('SELECT * FROM todos ORDER BY due ASC;')->fetchAll();
        
        $contentPath = \getcwd() . '/../resources/views/todos/index.todos.php';
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }

    public function create()
    {
        $contentPath = \getcwd() . '/../resources/views/todos/create.todos.php';
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }

    public function store()
    {
        try {
            Todo::save(Request::payload());
            $_SESSION['success'] = true;
            (new Router)->redirect('/todos/create');
        } catch (\Throwable $th) {
            // TODO: handle error properly
            $_SESSION['error'] = true;
            (new Router)->redirect('/todos/create');
        }
    }

    public function show()
    {
        $todo = Todo::find(Request::urlId());

        $contentPath = \getcwd() . '/../resources/views/todos/show.todos.php';
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }
}
