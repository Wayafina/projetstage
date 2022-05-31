<?php

class Choix {
    private $id_plat;
    private $nom_plat;
    private $prix;
    private $image;

    public function getIdPlat(){
        return $this->id_plat;
    }
    public function setIdPlat($id_plat){
        $this->id_plat=$id_plat;
    }

    public function getNomPlat(){
        return $this->nom_plat;
    }
    public function setNomPlat($nom_plat){
        $this->nom_plat=$nom_plat;
    }

    public function getPrix(){
        return $this->prix;
    }
    public function setPrix($prix){
        $this->prix=$prix;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image=$image;
    }
}