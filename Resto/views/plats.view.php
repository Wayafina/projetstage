
<?php
ob_start();

?>

<h1>liste plats</h1>

<?php

 var_dump($tableau);

 $pattern = '<div class="card" style="width: 18rem;">
 <img class="card-img-top" src="public/fonts/%s" alt="Card image cap">
 <div class="card-body">
   <h5 class="card-title">%s</h5>
   <p class="card-text">%d</p>
   <a href="#" class="btn btn-primary">Ajouter</a>
 </div>
 </div>';

 $html = '';
 foreach ($tableau as $ligne) {
   var_dump($ligne);
   $html.= sprintf(
     $pattern,

      $ligne['image'],
      $ligne['nom_plat'],
      $ligne['prix']
     //  $ligne['']
    ); //html=html.sprintf()
  };
  echo $html; 



$texte = "Faites vos Choix !";
$content = ob_get_clean();
require "template.php";
