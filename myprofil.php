<?php
  include ("php/db.php");
  /* marche dans le html
  <?php echo $_SESSION['member']['id'] ?>
  */
  $iduser = $_SESSION['member']['id'];
  print_r ($iduser);
?>

<?php include("layouts/header.php");?>

<main class="fond_blur">
  <h1> Mon profil</h1>
  <h2> Mes evenements </h2>
  <?php echo $_SESSION['member']['id'] ?>

  </div>

</main>


<?php include("layouts/footer.php");?>
