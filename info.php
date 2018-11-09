<?php
  include ("php/db.php");
?>
<?php include("layouts/header.php");?>

<?php include("php/get_events.php");?>
<?php include("php/get_eventinfo.php");?>

<?php include("php/get_user.php");?>
<?php include("php/get_participants.php");?>

<main class="fond_blur">

  <div class="row">

    <!--Partie de gauche: recupere les derniers evenements-->
    <div class="col-sm-3">
      <h2>Les derniers évenements</h2>
      <?php
      foreach ($events as $event) { /*recupere grace a get_events.php*/
        ?>
        <div class="list-group-3">
          <a  class='list-group-item list-group-item-action' href="info.php?id=<?php echo $event['id'] ?>">
            <?php echo $event['title'] ?>
          </a>
        </div>
      <?php } ?>
    </div>

    <!--Partie du milieu: infos de l'evenement-->
    <div class="col-sm-6">
      <!-- titre -->
      <h1><?php echo $eventinfo["title"] ?></h1> <!--recupere grace a get_eventinfo.php-->
      <!-- description -->
      <p><?php echo $eventinfo["description"]?></p>
      <!-- date de création -->
      <p><?php echo $eventinfo["date_created"]?></p>
      <!-- date de debut et de fin de l'event -->
      <p><?php echo ("Date de debut: ") . $eventinfo["date_start"]?></p>
      <p><?php echo ("Date de fin: ") . $eventinfo["date_end"]?></p>

      <!-- personne qui a cree l'evenement -->
      <?php echo ("Organisateur: ")?>
      <a href="profil.php?iduser=<?php echo $eventinfo['idcreator'] ?>">
          <?php echo $resultIdCreator["first_name"] . ("&nbsp") . $resultIdCreator["last_name"] ?> <!--recupere grace a get_user.php-->
        </a>

      <!-- adresse de l'event -->
      <p><?php echo ("Adresse: ") . $eventinfo["adress"]?></p>
      <!-- url de l'event -->
      <p><?php echo $eventinfo["url"]?></p>
      <!-- prix de l'event -->
      <div><?php echo $eventinfo["price"]?> euros </div>
      <!-- nombre de participants -->
      <p> <?php echo  ("Nombre max de participants: ") . $eventinfo["participant_number"]?></p>



      <!-- si la personne est connectee-->
      <?php if(!empty($_SESSION['member'])){?>

        <?php include('php/check_participations.php');
        if ($estParticipant==0) { ?>
          <button type="button" class="btn btn-light" ><a href="php/participate.php?id=<?php echo $eventinfo['id']?>">Participer</a></button>
       <?php } else { ?>
    <button type="button" class="btn btn-light" ><a href="php/cancel_part.php?id=<?php echo $eventinfo['id']?>">Annuler ma participation</a></button>
       <?php }
        ?>

        <!--si c'est son evenement alors il peut le modifier ou le supprimer-->
        <?php if($_SESSION['member']['id'] ==  $eventinfo['idcreator']){?>
          <button type="button" class="btn btn-light"><a href="event_edit.php?id=<?php echo $eventinfo['id']?>">Modifier l'evenement</a></button>
          <button type="button" class="btn btn-danger"><a href="php/delete_event.php?id=<?php echo $id?>">Supprimer</a></button>
        <?php } ?>

    <?php }?>
    </div>

    <!--Partie de droite: les participants a cet evenement-->
    <div class="col-sm-3">
      <h2>Les participants:</h2>
      <?php
      foreach ($participants as $p) { /*recupere grace a get_participants.php | on parcourt tous les participants et pour chacun on affiche son nom et prenom*/
        ?>
        <div class="list-group">
          <a class='list-group-item list-group-item-action' href="profil.php?iduser=<?php echo $p['id'] ?>">
            <?php echo $p['last_name']." ".$p['first_name'] ?>
          </a>
        </div>
      <?php } ?>
    </div>

  </div>

</main>


<?php include("layouts/footer.php");?>
