<?php
    ob_start();
?>

<div id="boutons" class="justify-content-center">
  <div id="bouton1">
  <a href="<?= URL ?>login"  id="one" type="button" class="btn btn-lg btn-outline-danger">Connexion</a>
  </div>
  <div id="bouton2">
  <a href="<?= URL ?>plats" id="two" type="button" class="btn btn-lg btn-outline-danger">Commander</a>
  </div>
  <div id="bouton3">
  <a href="<?= URL ?>apropos" id="three" type="button" class="btn btn-lg btn-outline-danger">A propos</a>
  </div>
</div>

<?php
$texte = "Bienvenue chez Les Saveurs d'Alberto! ";
$content = ob_get_clean();
require "template.php";
    
  

