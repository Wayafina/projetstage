<?php
ob_start();
?>

<h1>Connexion</h1>

<form class="w-50 m-auto mt-4" action="<?= URL ?>verifyPassword" method="post">
    
        <div class="form-group">
            <label for="mail">E-mail:</label>
            <input type='password' class="form-control" id="mail" name="mail"></input>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe:</label>
            <input type='password' class="texte" id="mdp" name="mdp"></input>
        </div>
        <button type="submit" class="btn btn-primary my-3">S'inscrire</button><br>
</form>

<?php
$texte = "";
$content = ob_get_clean();
require "template.php";