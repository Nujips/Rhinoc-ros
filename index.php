<?php
  include("php/db.php");
?>
<?php include("php/get_events.php");?>
<?php include("layouts/header.php");?>

  <main class="fond_blur">
    <div class="list">
      <h2>Les derniers évenements</h2>
        <?php
        foreach ($events as $event) { /* on parcourt tous les events de la bd [obtenus grace a get_events.php] et pour chacun, on affiche son titre*/
          ?>
          <div class="list-group">
            <a class='list-group-item list-group-item-action' href="info.php?id=<?php echo $event['id'] ?>">
              <?php echo $event['title'] ?>
            </a>
          </div>
        <?php } ?>
    </div>
  </main>

<?php include("layouts/footer.php");?>
