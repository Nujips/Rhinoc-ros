<?php
$title ='Contact';
$description='';
include ("php/db.php");
?>

<?php include("php/get_events.php");?>

<?php include("php/get_userinfo.php");?>

<?php include("layouts/header.php");?>

<main class="fond_blur">

      <h1> <?php echo $member["first_name"] . $member["last_name"] ?> </h1>
      <p> <?php echo ("Email: ") .  $member["email"]?> </p>


        <h2> Ses évenements </h2>

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
  </div>

</main>


<?php include("layouts/footer.php");?>
