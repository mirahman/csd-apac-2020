<?php 

class Database {

    public static $db = null;
    private function __construct() {
    }

    private function __clone() {
    }


    public static function getInstance() {

        if(is_null(self::$db)) {
            self::$db = new Database();
        }
        return self::$db;
    }
}

$mysql  = Database::getInstance();
$pgsql  = Database::getInstance();
$oracle = Database::getInstance();

$mysql = null;

var_dump($mysql, $pgsql, $oracle);