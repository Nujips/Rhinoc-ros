<?php
  include ("php/db.php");
  /* marche dans le html
  <?php echo $_SESSION['member']['id'] ?>
  */
?>

<?php include("layouts/header.php");?>
<?php include("php/myprofil.php");?>

<main class="fond_blur">
  <h1> Mon profil</h1>
  <p><?php echo ("Mon prénom: ") . $user["first_name"]?></p>
  <p><?php echo ("Mon nom: ") . $user["last_name"]?></p>
  <p><?php echo ("Mon adresse mail: ") . $user["email"]?></p>
  <p><?php echo ("Date de création: ") . $user["date_created"]?></p>

  <div>
    <p>Supprimer mon compte</p>
  </div>

  <h2> Mes evenements </h2>

  <?php
  foreach ($member_event as $me) {
    ?>

    <div class="list-group">
      <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $me['id'] ?>">
        <?php echo $me['title'] ?>
      </a>
    </div>
  </div>


<?php } ?>


</main>


<?php include("layouts/footer.php");?>
