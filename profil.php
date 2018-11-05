<?php
  $title ='Contact';
  $description='';
  include ("php/db.php");


?>

<?php include("php/get_events.php");?>
<?php include("php/get_user.php");?>

<?php include("layouts/header.php");?>

<main id="content">

  <h1> <?php echo $member["first_name"] . $member["last_name"] ?> </h1>
  <p> <?php echo ("Email: ") .  $member["email"]?> </p>

  <div>
    <h2> Ses évenements </h2>
    <?php
    foreach ($user as $u) {
      ?>
      <ul>
        <li>
            <?php echo $u['title'] ?>
        </li>
      </ul>

    <?php } ?>
  </div>

</main>


<?php include("layouts/footer.php");?>

  </body>
</html>
