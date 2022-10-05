<?php

class ConnDB
{
    public function connect($sql)
    {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db = 'consoleApp';

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db;

        $pdo = new PDO($dsn, $db_user, $db_password);

        $query = $pdo->prepare($sql);
        $query->execute();
        $pdo = null;
    }



}

