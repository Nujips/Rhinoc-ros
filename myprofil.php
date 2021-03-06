<?php
  include ("php/db.php");
?>

  <?php include("layouts/header.php");?>

  <?php include("php/get_myprofilinfo.php");?>
  <?php include("php/get_myparticipatedevent.php");?>

<main class="fond_blur">

  <h1> Mon profil</h1>
    <p><?php echo ("Mon prénom: ") . $user["first_name"]?></p>
    <p><?php echo ("Mon nom: ") . $user["last_name"]?></p>
    <p><?php echo ("Mon adresse mail: ") . $user["email"]?></p>
    <p><?php echo ("Date de création: ") . $user["date_created"]?></p>

  <!--Les evenements que j'ai cree-->
  <h2> Mes évènements </h2>
  <?php
  foreach ($member_event as $me) {
    ?>
    <div class="list-group">
      <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $me['id'] ?>">
        <?php echo $me['title'] ?>
      </a>
    </div>
  <?php } ?>

  <!--Les evenements auxquels je participe-->
  <h2> Je participe: </h2>
  <?php
    foreach ($myparticipant_event as $mpe){
  ?>
      <div class="list-group">
        <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $mpe['id'] ?>">
          <?php echo $mpe['title'] ?>
        </a>
      </div>
  <?php } ?>


</main>


  <?php include("layouts/footer.php");?>
