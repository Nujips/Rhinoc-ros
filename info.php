<?php
  $title ='Contact';
  $description='';
  include ("php/db.php");
?>

<?php include("php/get_events.php");?>
<?php include("php/get_user.php");?>
<?php include("php/get_eventinfo.php");?>

<?php include("layouts/header.php");?>

<main id="content">

  <div class="list">
    <h2>Les derniers évenements</h2>
    <?php
    foreach ($events as $event) {
      ?>
      <ul>
        <li>
          <a href="info.php?id=<?php echo $event['id'] ?>">
            <?php echo $event['title'] ?>
          </a>
        </li>
      </ul>

    <?php } ?>

  </div>

  <div class="event_infos">
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
      <a href="profil.php?iduser=<?php echo $member['idcreator'] ?>">
        <?php echo $member["first_name"] . $member["last_name"] ?>
      </a>

    <!-- adresse de l'event -->
    <p><?php echo ("Adresse: ") . $eventinfo["adress"]?></p>

    <!-- url de l'event -->
    <p><?php echo $eventinfo["url"]?></p>

    <!-- prix de l'event -->
    <div><?php echo $eventinfo["price"]?> euros </div> <!-- prix -->

    <!-- nombre de participants -->
    <p> <?php echo  ("Nombre max de participants: ") . $eventinfo["participant_number"]?></p> <!-- nombre de participants -->

  </div>

</main>


<?php include("layouts/footer.php");?>

  </body>
</html>
