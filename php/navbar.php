<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">

     <img src="img/logo.png" width="60" height="30" class="d-inline-block align-top" alt="">
    Rhinoc-ros
  </a>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!--partie sans logo et nom-->
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


    <div class="navbar-nav">
      <a href="./index.php" class="nav-item nav-link active">Accueil<span class="sr-only">(current)</span></a>

      <!---si la personne n'est pas connectée-->
      <?php
      if(empty($_SESSION['member'])){
        ?>
          <a href="./login.php" class="nav-item nav-link">Se connecter</a>
      <?php
      } ?>

      <?php
      if(empty($_SESSION['member'])){
        ?>
          <a href="./register.php"class="nav-item nav-link">S'inscrire</a>
      <?php
      } ?>

      <!---si la personne est connectée-->
      <?php
      if(!empty($_SESSION['member'])){
        ?>
          <a href="./myprofil.php"class="nav-item nav-link">Mon profil</a>
      <?php
      } ?>

      <?php
      if(!empty($_SESSION['member'])){
        ?>
          <a href="php/logout.php" class="nav-item nav-link" >Se déconnecter</a>
      <?php
      } ?>

    </div>

  </div>
</nav>
