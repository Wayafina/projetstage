<?php

class Manager{
    private $base;
    public function __construct($base){
        $this->setDb($base);
    }
    public function setDb(PDO $base){
        $this->base = $base;
    }

    public function getDb(){
        return $this->base;
    }
    
}