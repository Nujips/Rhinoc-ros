<?php
  include ("php/db.php");
?>

<?php include("php/get_events.php");?>

<?php include("php/get_userinfo.php");?>

<?php include("layouts/header.php");?>

<main id="content">

  <h1> <?php echo $member["first_name"] . $member["last_name"] ?> </h1>
  <p> <?php echo ("Email: ") .  $member["email"]?> </p>
  <p> <?php echo ("Date de creation: ") .  $member["date_created"]?> </p>

  <div>
    <h2> Ses Mes êvenements </h2>

    <?php
    foreach ($member_event as $me) {
      ?>
      <ul>
        <li>
          <a href="info.php?id=<?php echo $me['id'] ?>">
            <?php echo $me['title'] ?>
          </a>
        </li>
      </ul>

    <?php } ?>
  </div>

</main>


<?php include("layouts/footer.php");?>
