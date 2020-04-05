<?php

class HomeController {
    public function index()
    {
        require $_SERVER[DOCUMENT_ROOT] . '/index.html';
    }
}