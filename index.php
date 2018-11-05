<?php
  $title ='Contact';
  $description='';
?>
<?php include("php/get_events.php");?>

<?php include("layouts/header.php");?>

    <main class="container">

      <div class="liste">
        <h2>Les derniers évenements</h2>
<<<<<<< HEAD
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
=======

        <div class="liste">
          <?php
          foreach ($events as $event) {
          ?>
          <a href="#" class="liste">
            <?php echo $event["title"]; ?>
          </a>
        <?php } ?>
        </div>
>>>>>>> master

        <?php } ?>

      </div>



    </main>

<?php include("layouts/footer.php");?>

  </body>
</html>
