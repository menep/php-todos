<?php

namespace App\Controllers;

use App\Core\Database;
use App\Core\Request;
use App\Models\Todo;

class TodosController
{
    public function index()
    {
        $fetchedTodos = (new Database)->query('SELECT * FROM todos;')->fetchAll();
        
        require '../resources/views/todos/index.todos.php';
    }

    public function create()
    {
        require 'create.todos.html';
    }

    public function store()
    {
        Todo::save(Request::payload());
    }
}
