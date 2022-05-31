<?php

require_once "models/Dbconnect.Class.php";

class UserController extends AbstractController{
    public function validAccount(){
        $tableau=$this->userManager->validAccount();
        require "views/connexion.view.php";
    }
    public function createAccount(){
        require 'views/createAccount.view.php';
        $tableau=$this->userManager->addAccount();
    }
}