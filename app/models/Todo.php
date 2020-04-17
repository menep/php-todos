<?php

namespace App\Models;

use App\Core\Query;

class Todo
{
    public static function save($todo)
    {
        // TODO: add validation

        $sql = 'INSERT INTO todos (body, priority, due) values (:body, :priority, :due)';
        $boundParams = ['body' => $todo['body'], 'priority' => $todo['priority'], 'due' => $todo['due']];

        Query::execute($sql, $boundParams);
    }
}
