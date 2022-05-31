<?php
ob_start()
?>

<h1> Page A Propos à faire</h1>

<?php
$texte = "On vous attend dans notre restaurant!";
$content = ob_get_clean();
require "template.php";