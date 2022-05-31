<?php

require_once "models/Dbconnect.Class.php";
require_once "models/Manager.Class.php";

class AdminController extends AbstractController{
    public function nouveau_plat(){
        $tableau=$this->manager->ajoute_plat();
        self::MessageAlerte("ajout réalisé",self::VERT);

    }
    public function commande(){
                 require "views/commandes.view.php";
    }
}