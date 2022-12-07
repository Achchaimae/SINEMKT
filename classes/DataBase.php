<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "SINEMKT";

    protected function connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='. $this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);
        $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}