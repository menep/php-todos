<?php

namespace App\Controllers;

use App\Database;
use App\Request;
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
        if (!Request::payload()) {
            throw new Exception("Error storing todo", 1);
        }
        // TODO: destructure request payload, pass it to Todo model constructor
        // (new Todo('test'))->save();
    }
}
