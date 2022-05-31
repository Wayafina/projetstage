<?php

class User{
    private $nom;
    private $prenom;
    private $mail;
    private $mdp;
    private $role;
    private $tel;

    
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function getMail(){
        return $this->mail;
    }
    public function setMail($mail){
        $this->mail=$mail;
    }

    public function getMdp(){
        return $this->mdp;
    }
    public function setmdp($mdp){
        $this->mdp=$mdp;
    }

    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role=$role;
    }

    public function getTel(){
        return $this->tel;
    }
    public function setTel($tel){
        $this->tel=$tel;
    }

}