<?php

namespace App\Models;

use App\Core\Request;
use App\Core\Database;
use App\Services\Validator;

class Todo
{
    public static function save($todo)
    {
        try {
            // TODO: add validation

            $sql = 'INSERT INTO todos (body, priority) values (:body, :priority)';

            (new Database)->query($sql, ['body' => $todo['body'], 'priority' => $todo['priority']]);
        } catch (\Throwable $th) {
            var_dump($th);
            die();
        }
    }
}
