<?php

class Database
{
    public $pdo;

    public function __construct()
    {
        $host = '127.0.0.1';
        $db = 'todos';
        $port = '3306';

        $dsn = "mysql:host={$host};dbname={$db};port={$port};charset=utf8mb4";

        $user = 'pierantonio';
        $password = 'password';

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function query($sql)
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt;
        } catch (\Exception $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
