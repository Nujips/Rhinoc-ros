<?php
  $title ='Contact';
  $description='';
?>
<?php include("php/get_events.php");?>

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



    </main>

<?php include("layouts/footer.php");?>

  </body>
</html>
