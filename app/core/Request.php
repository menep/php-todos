<?php

namespace App\Core;

class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function url()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    public function payload()
    {
        return empty($_REQUEST) ? false : $_REQUEST;
    }
}
