<?php

require_once "models/Dbconnect.Class.php";
require_once "models/Choix.Class.php";
require_once "controllers/AbstractController.php";
require_once "models/Manager.Class.php";
require_once "models/visitor/VisitorManager.Class.php";

class VisitorController extends AbstractController{
    private $manager;
    private $choix;
    private $base;
    private $visitor;

    public function apropos(){
        require 'views/nous.view.php';
    }
    public function accueil(){
        require_once 'views/accueil.view.php';
    }
    public function __construct(){
        $this->base = new Dbconnect();
        $this->manager = new Manager($this->base);
        $this->choix = new Choix();

    }
    
    public function plats(){
        $this->visitorManager = new VisitorManager();
        $tableau = $this->visitorMananger->affiche_plats();
         require "views/plats.view.php";
        //var_dump($tableau);
    }
}