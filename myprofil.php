<?php
  include ("php/db.php");
?>


<?php include("layouts/header.php");?>

<main class="fond_blur">
  <h1> Mon profil</h1>
  <h2> Mes evenements </h2>

  <?php echo $_SESSION['member']['id'] ?>
  </div>

</main>


<?php include("layouts/footer.php");?>
