<?php
  $title ='Contact';
  $description='';
  include ("php/db.php");
?>

<?php include("php/get_events.php");?>
<?php include("php/get_eventinfo.php");?>
<?php include("php/get_user.php");?>

<?php include("layouts/header.php");?>

<main class="fond_blur">

<div class="row">

  <!--gauche-->
  <div class="col-sm-12 col-md-6">
    <h2>Les derniers évenements</h2>
    <?php
    foreach ($events as $event) {
      ?>
      <div class="list-group">
          <a  class='list-group-item list-group-item-action' href="info.php?id=<?php echo $event['id'] ?>">
            <?php echo $event['title'] ?>
          </a>
      </div>

    <?php } ?>

  </div>

  <!--droite-->
    <div class="col-sm-12 col-md-6">
    <!-- titre -->
    <h1><?php echo $eventinfo["title"] ?></h1>

    <!-- description -->
    <p><?php echo $eventinfo["description"]?></p>

    <!-- date de création -->
    <p><?php echo $eventinfo["date_created"]?></p> <!-- date de création -->

    <!-- date de debut et de fin de l'event -->
    <p><?php echo ("Date de debut: ") . $eventinfo["date_start"]?></p>
    <p><?php echo ("Date de fin: ") . $eventinfo["date_end"]?></p>

    <!-- personne | faire un lien sur le profil de la personne -->
    <?php echo ("Organisateur: ")?>
      <a href="profil.php?iduser=<?php echo $eventinfo['idcreator'] ?>">
        <?php echo $resultIdCreator["first_name"] . ("&nbsp") . $resultIdCreator["last_name"] ?>
      </a>

    <!-- adresse de l'event -->
    <p><?php echo ("Adresse: ") . $eventinfo["adress"]?></p>

    <!-- url de l'event -->
    <p><?php echo $eventinfo["url"]?></p>

    <!-- prix de l'event -->
    <div><?php echo $eventinfo["price"]?> euros </div> <!-- prix -->

    <!-- nombre de participants -->
    <p> <?php echo  ("Nombre max de participants: ") . $eventinfo["participant_number"]?></p> <!-- nombre de participants -->

    <!--si c'est l'evenement de la personne connectee, il s'affiche-->
    <?php if($_SESSION['member']['id'] ==  $eventinfo['idcreator']){?>
    <a href="event_edit.php"> <div> Modifier l'evenement </div> </a>
    
  <?php } ?>
  </div>

</div><!--div class row-->

</main>


<?php include("layouts/footer.php");?>
