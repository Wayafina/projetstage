<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= URL ?>public/css/theme.css" media="screen">
	<!-- <link rel="stylesheet" href="<?= URL ?>Public/assets/css/main.css"> -->
</head>

<body>
  <!-- menu en haut -->
    <nav class="fixed-top">
      <ul class="nav justify-content-center nav-fill ">
        <li class="nav-item">
          <a class="nav-link active" href="<?= URL ?>accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>plats">Plats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>panier">Panier</a>
        </li>
        <?php if (isset($SESSION)) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>compte">Mon Compte</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>inscription">S'inscrire</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= URL ?>login">Se connecter</a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- carrousel 1 img  -->
    <main>
      <img id="accueil" src="public/fonts/accueil.PNG" alt="image">
    </main>
    <div id="presentation">
      <p><?= $texte?></p>
    </div>
<?= $content?>
    </body>
<!-- le footer -->
<footer>
<footer id="footer" class="top-space">

<div class="footer1">
  <div class="container">
    <div class="row">

      <div class="col-md-3 widget">
        <h3 class="widget-title">Contact</h3>
        <div class="widget-body">
          <p>+234 23 9873237<br>
            <a href="mailto:#">some.email@somewhere.com</a><br>
            <br>
            234 Hidden Pond Road, Ashland City, TN 37015
          </p>
        </div>
      </div>

      <div class="col-md-3 widget">
        <h3 class="widget-title">Follow me</h3>
        <div class="widget-body">
          <p class="follow-me-icons">
            <a href=""><i class="fa fa-twitter fa-2"></i></a>
            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
            <a href=""><i class="fa fa-github fa-2"></i></a>
            <a href=""><i class="fa fa-facebook fa-2"></i></a>
          </p>
        </div>
      </div>

      <div class="col-md-6 widget">
        <h3 class="widget-title">Text widget</h3>
        <div class="widget-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
          <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
        </div>
      </div>

    </div> <!-- /row of widgets -->
  </div>
</div>

<div class="footer2">
  <div class="container">
    <div class="row">

      <div class="col-md-6 widget">
        <div class="widget-body">
          <p class="simplenav">
            <a href="#">Home</a> |
            <a href="about.html">About</a> |
            <a href="sidebar-right.html">Sidebar</a> |
            <a href="contact.html">Contact</a> |
            <b><a href="signup.html">Sign up</a></b>
          </p>
        </div>
      </div>

      <div class="col-md-6 widget">
        <div class="widget-body">
          <p class="text-right">
            Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
          </p>
        </div>
      </div>

    </div> <!-- /row of widgets -->
  </div>
</div>
</footer>

</html>