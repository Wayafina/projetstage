<?php
ob_start();
?>

<h1>Formulaire d'inscription</h1>

<form class="w-50 m-auto mt-4" action="<?= URL ?>addUser" method="post">
    
        <div class="form-group ">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="name" placeholder="entre vtre e-mail">
        </div>
        <div class="form-group ">
            <label for="prenom">Prénom:</label>
            <input type="email" class="form-control" name="mail" placeholder="entre vtre e-mail">
        </div>
        <div class="form-group">
            <label for="mail">E-mail:</label>
            <input type='password' class="form-control" id="mail" name="mail"></input>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe:</label>
            <input type='password' class="texte" id="mdp" name="mdp"></input>
        </div>
        <div class="form-group">
            <label for="tel">Numero de tel</label>
            <input type='text' class="texte" id="tel" name="tel"></input>
        </div>
        <button type="submit" class="btn btn-primary my-3">S'inscrire</button><br>
</form>

<?php
$texte = "";
$content = ob_get_clean();
require "template.php";