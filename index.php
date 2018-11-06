<?php
  $title ='Contact';
  $description='';
  include("php/db.php");
?>
<?php include("php/get_events.php");?>

<?php include("layouts/header.php");?>

    <main class="fond_blur">

      <div class="list">
        <h2>Les derniers évenements</h2>
        <?php
        foreach ($events as $event) {
          ?>
          <div class="list-group">
              <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $event['id'] ?>">
                <?php echo $event['title'] ?>
              </a>
          </div>

        <?php } ?>

      </div>

      <div>
        CALENDRIER
        <?php include("php/calendar.php")?>
      </div>

    </main>



<?php include("layouts/footer.php");?>
