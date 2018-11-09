<?php
$title ='Contact';
$description='';
include ("php/db.php");
?>

<?php include("layouts/header.php");?>

<?php include("php/get_userinfo.php");?>
<!--recupere les evenements auxquels la personne participe-->
<?php include("php/get_participatedevent.php");?>

<main class="fond_blur">

  <h1> <?php echo $member["first_name"] . " " .  $member["last_name"] ?> </h1> <!--infos recuperees grace a get_userinfo.php-->
  <p> <?php echo ("Email: ") .  $member["email"]?> </p>

  <h2> Ses évènements: </h2>
  <?php
    foreach ($member_event as $me) { /*infos recuperees grace a get_userinfo.php*/
  ?>
      <div class="list-group">
        <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $me['id'] ?>">
          <?php echo $me['title'] ?>
        </a>
      </div>
  <?php } ?>


  <h2> Ses participations:  </h2>
  <?php
  foreach ($participant_event as $pe) { /*infos recuperees grace a get_participatedevent.php*/
  ?>
  <div class="list-group">
    <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $pe['iduser'] ?>">
      <?php echo $pe['title'] ?>
    </a>
  </div>
  <?php } ?>



</main>


<?php include("layouts/footer.php");?>
