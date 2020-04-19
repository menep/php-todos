<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = getenv('HOST');
$db = getenv('DBNAME');
$port = getenv('PORT');

$dsn = "mysql:host={$host};dbname={$db};port={$port};charset=utf8mb4";

$user = getenv('DBUSER');
$password = getenv('DBPASSWORD');

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new \PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$users = file_get_contents(__DIR__ . '/users.sql');
$todos = file_get_contents(__DIR__ . '/todos.sql');

$pdo->query($users);
$pdo->query($todos);
