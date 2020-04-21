<?php

namespace App\Controllers;

class MiscController
{
    public function index()
    {
        $content = file_get_contents(__DIR__ . '/../../resources/views/index.html');
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }

    public function notFound()
    {
        $content = file_get_contents(__DIR__ . '/../../resources/views/not-found.php');
        
        header("HTTP/1.0 404 Not Found");
        require __DIR__ . '/../../resources/views/partials/base.view.php';
    }
}
