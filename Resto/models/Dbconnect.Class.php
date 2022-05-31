<?php

class Dbconnect extends PDO{
    private $dsn;
    private $username;
    private $pass;
    private $options;

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=alberto;port=3306;charset=utf8';
        $username = "root";
        $pass = "root";
        $options= [];
        parent::__construct($dsn, $username, $pass, $options);
    }
}