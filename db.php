<?php

class Db
{

    public static function getConnection()
    {

        $dsn = "mysql:host=localhost;dbname=country";
        $db = new PDO($dsn, 'root', '');
        $db->exec("set names utf8");

        return $db;
    }
}