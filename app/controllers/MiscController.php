<?php

class MiscController {
    public function index()
    {
        require $_SERVER[DOCUMENT_ROOT] . '/index.html';
    }

    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        require $_SERVER[DOCUMENT_ROOT] . '/not-found.html';
    }
}