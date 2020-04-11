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
            $validationCriteria = ['body' => 'required'];
            Validator::validate($todo, $validationCriteria);

            // $boundParameters = [
            // 'body' => $parameters['body'],
            // 'user_id' => 1 // TODO: set up registration or assignment of todos
            // ];

            // $sql = 'INSERT INTO todos (body, user_id) values (:body, :user_id)';

            // (new Database)->query($sql, $boundParameters);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
