<?php

use App\Database;

class TodosController
{
    public function index()
    {
        $fetchedTodos = (new Database)->query('SELECT * FROM todos;')->fetchAll();
        
        require '../resources/views/index.todos.php';
    }
}
