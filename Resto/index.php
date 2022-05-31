<?php
// index.php est le routeur de l'app

// CONST
define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
// include "views/template.php";
session_start();

require_once "controllers/AbstractController.php";
require_once "controllers/visitor/VisitorController.php";
require_once "controllers/user/UserController.php";
require_once "controllers/PanierController.php";
require_once "controllers/admin/AdminController.php";

$visitor= new VisitorController();
$user= new UserController();
$panier = new PanierController();
$admin = new AdminController();

try {
    //Selon ce qui est entré dans l'URL
    if (empty($_GET['page'])) {
        $visitor->accueil();
    } else {
        // Récupère les mots après les / et les met dans des tab *vardump url , ajoute dans l'url /add/ok
        $url = explode('/', filter_var($_GET['page'], FILTER_SANITIZE_URL));

        switch ($url[0]) {
            case 'accueil':
                $visitor->accueil();
                break;
            case 'inscription':
                $user->createAccount();
                break;
            case 'login':
                $user->validAccount();
            case 'plats':
                $visitor->plats();
                break;
            case 'apropos':
                $visitor->apropos();
                break;
            case 'panier':
                $panier->commande();
                break;
            case 'commande';
                $admin->commande();
                
            default:
                 throw new Exception("La page n'existe pas");
        
    }

    }
}catch (Exception $e){
    $message = $e->getMessage();
    require "views/error.view.php";
}