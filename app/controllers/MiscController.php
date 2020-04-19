<?php

namespace App\Controllers;

class MiscController
{
    public function index()
    {
        require '../resources/views/index.html';
    }

    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        require '../resources/views/not-found.html';
    }
}
