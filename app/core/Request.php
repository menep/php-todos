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
        $parsedUrl = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $match = preg_match('/\d+/', $parsedUrl);
        if ($match) {
            $parsedUrl = preg_replace('/\d+/', 'id', $parsedUrl);
        }
        return $parsedUrl;
    }

    public function payload()
    {
        return empty($_REQUEST) ? false : $_REQUEST;
    }

    public function urlId()
    {
        $parsedUrl = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        preg_match('/\d+/', $parsedUrl, $matches);
        return $matches[0];
    }
}
