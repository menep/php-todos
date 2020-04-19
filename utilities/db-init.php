<?php
require 'vendor/autoload.php';

use App\Core\Query;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$users = file_get_contents(__DIR__ . '/users.sql');
$todos = file_get_contents(__DIR__ . '/todos.sql');

Query::execute($users);
Query::execute($todos);
