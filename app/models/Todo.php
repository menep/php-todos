<?php

namespace App\Models;

class Todo
{
    protected $body;

    public function __construct(string $body = null)
    {
        // TODO: add other properties (created_at, etc)
        $this->body = $body;
    }

    public function save()
    {
        // TODO: add logic to save in database
        // var_dump($this);
        // $parameters = Request::payload();
        // $boundParameters = [
        //     'body' => $parameters['body'],
        //     'completed' => $parameters['completed'],
        //     'date' => 0,
        //     'priority' => $parameters['priority'],
        //     'tags' => $parameters['tags'],
        // ];
        // $sql = 'INSERT INTO todos (body, completed, due_at, priority, tags) values (:body, :completed, :date, :priority, :tags)';
        // (new Database)->query($sql, $boundParameters);
    }
}
