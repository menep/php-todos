<?php

namespace App\Controllers;

class MiscController
{
    public function index()
    {
        $contentPath = \getcwd() . '/../resources/views/index.html';
        
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }

    public function notFound()
    {
        $contentPath = \getcwd() . '/../resources/views/not-found.html';
        
        header("HTTP/1.0 404 Not Found");
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }
}
