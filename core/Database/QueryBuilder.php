<?php

namespace Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->exec('set names utf8');
    }

    public function execute($sql, $param = '')
    {
        try {
            $statement = $this->pdo->prepare($sql);
            if ('' == $param) {
                $statement->execute();
            } else {
                $statement->execute($param);
            }
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $ex) {
            die('Whoops, something went wrong!');
        }
    }
}
