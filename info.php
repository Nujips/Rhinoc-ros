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

  <div>
    <h1><?php echo $eventinfo["title"] ?></h1>
    <p><?php echo $eventinfo["description"]?></p>
    <p><?php echo $eventinfo["date_created"]?></p> <!-- date de création -->
    <p><?php echo ("Date de debut: ") . $eventinfo["date_start"]?></p>
    <p><?php echo ("Date de fin: ") . $eventinfo["date_end"]?></p>
    <p><?php echo ("Organisateur: ") . $member["first_name"] . $member["last_name"] ?></p><!-- faire un lien sur le profil de la personne -->
    <p><?php echo ("Adresse: ") . $eventinfo["adress"]?></p><!-- adresse event-->
    <p><?php echo $eventinfo["url"]?></p> <!-- url -->
    <div><?php echo $eventinfo["price"]?> euros </div> <!-- prix -->
    <p> <?php echo  ("Nombre max de participants: ") . $eventinfo["participant_number"]?></p> <!-- nombre de participants -->
  </div>
</main>


<?php include("layouts/footer.php");?>

  </body>
</html>
