<?php

namespace App\Models;

use App\Core\Query;

class Todo
{
    public static function save($todo)
    {
        // TODO: add validation

        $sql = 'INSERT INTO todos (body, priority) values (:body, :priority)';
        $boundParams = ['body' => $todo['body'], 'priority' => $todo['priority']];

        Query::execute($sql, $boundParams);
    }
}
