<?php

namespace backend\model;

$hostname = "localhost";
$dbname = "ecommerce";
$username = "root";
$password = "";

Class Conn{

    private static $instance;

    public static function getConn() {
        
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        }

        return self::$instance;
    }
}