<?php

namespace App\Core;

use App\Core\Database;

class Query
{
    public static function execute($sql, $boundParameters = [])
    {
        try {
            $statement = (new Database)->pdo->prepare($sql);
            $statement->execute($boundParameters);
            return $statement;
        } catch (\Exception $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
