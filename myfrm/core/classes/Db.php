<?php

namespace myfrm;

use PDO;
use PDOStatement;

class Db
{
    private $connection;
    private PDOStatement $statement;
    private static $instance = null;

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    public function __wakeup()
    {

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (\PDOException $e) {
            abort(500);
            die();
        }

    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abort(404);
        }
        return $result;
    }
}