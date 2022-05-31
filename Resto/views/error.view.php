<?php
ob_start();
?>


<h1>Revenez à la page principale en cliquant <a href="<?= URL ?>accueil">içi</a></h1>


<?php
$texte = "La page demandée n'existe pas";
$content = ob_get_clean();
require "template.php";