<?php
ob_start();
?>


<h1>Commande en cours</h1>


<?php
$texte = "";
$content = ob_get_clean();
require "template.php";
