<?php

namespace model;

Class Conn{

    private static $instance;

    public static function getConn() {
        
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
        }

        return self::$instance;
    }
}