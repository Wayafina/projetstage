

<?php

include "models/Manager.Class.php";
include "models/user/UserEntity.Class.php";

class UserManager extends AbstractController{
    
    public function addUser(){

        $nom=(isset($_POST['nom'])&& !empty($_POST['nom']))?htmlspecialchars($_POST['nom']):null;
        $mail=(isset($_POST['mail'])&& !empty($_POST['mail']))?htmlspecialchars($_POST['mail']):null;
        $prenom=(isset($_POST['prenom'])&& !empty($_POST['prenom']))?htmlspecialchars($_POST['prenom']):null;
        $mdp=(isset($_POST['mdp'])&& !empty($_POST['mdp']))?htmlspecialchars($_POST['mdp']):null;
        $tel=(isset($_POST['tel'])&& !empty($_POST['tel']))?htmlspecialchars($_POST['tel']):null;

        $user= new User();
        $pass=sha1((md5($mdp)).md5($mail));

        $sql = "INSERT INTO users (nom, prenom, mail, mdp, role, tel) VALUES (?,?,?,?,?,?)";
        $param=[
            $user->getNom(),
            $user->getPrenom(),
            $user->getMail(),
            $user->$pass,
            "0",
            $user->getTel()
        ];
        $res = $this->base->prepare($sql);
        $res->execute($param);
        self::MessageAlerte("inscription réussie", self::VERT);
        header('Location: views/connexion.view.php');
    }

    public function getPasswordUser($mail)
    {
        //cherche le mdp de la bdd en fontion du mail 
        $sql = "SELECT mdp FROM user WHERE mail=?";
        $param = [$mail];
        $res = $this->base->prepare($sql);
        $res->execute($param);
        $rep = $res->fetch();
        return $rep['mdp'];
    }
    public function verifyPassword($mail, $password)
    {
        //utiliser la fonction precedente pour avoir le mdp crypté dans la base de donnée 
        //utilisation de passwordverify pour vérifier le mdp
        $pass = $this->getPasswordUser($mail);
        //var_dump($pass);
        return password_verify($password, $pass);
        if (password_verify($password, $pass)==true){
            self::MessageAlerte("connexion effectuée",self::VERT);
            header('Location: '.URL.'accueil');
        }else{
            self::MessageAlerte("connexion échoué",self::ROUGE); 
        }
    }
}