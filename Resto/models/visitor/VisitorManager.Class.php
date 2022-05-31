<?php

require_once "models/Manager.Class.php";
require_once "models/Choix.Class.php";

class VisitorManager extends AbstractController{
    

    public function affiche_plats(){
        $resultat = $this->base->query('SELECT * FROM plats');
        $choix = new Choix();
        $tableau = [];
        while($ligne = $resultat->fetch()){
            $choix->setIdPlat($ligne['id_plat']);
            $choix->setNomPlat($ligne['nom_plat']);
            $choix->setPrix($ligne['prix']);
            $choix->setImage($ligne['image']);
    
            $tableau[] = $ligne;
        }
        return $tableau;
        
    }
}