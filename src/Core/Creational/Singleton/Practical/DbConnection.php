<?php

namespace Core\Creational\Singleton\Practical;

use stdClass;

class DbConnection extends Singleton
{
    private ?stdClass $conn = null;

    protected function __construct()
    {
        var_dump('conectou ao db às ' . date('YmdHis'));

        $this->conn = new stdClass;
    }

    public static function getConnection(): stdClass
    {
        $instance = static::getInstance();

        return $instance->conn;
    }
}

// use PDO;

// class DbConnection extends Singleton
// {
//     private ?PDO $conn = null;

//     protected function __construct()
//     {
//         $this->conn = new PDO("mysql:host=localhost,dbname=design_patterns", 'user_db', 'user_pass');
//     }

//     public static function getConnection(): PDO
//     {
//         $instance = static::getInstance();

//         return $instance->conn;
//     }
// }