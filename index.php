<?php
  $title ='Contact';
  $description='';

/* recupere les derniers evenements dans la bd */
  //connexion à la bd
  require("php/db.php");

  //requete sql
  $sql="SELECT title
        FROM events
        ORDER BY date_created DESC";

  //envoie la requête à MySQL, sans l'executer
  $stmt = $conn->prepare($sql);

  //demande à MySQL de l'executer
  $stmt->execute();

  //va chercher les résultats chez MySQL
  $events = $stmt->fetchAll();

  //on teste
  //print_r($events);

?>

<?php include("layouts/header.php");?>

    <main id="content">

      <div class="list">
        <h2>Les derniers évenements</h2>

        <div class="list-group">
          <?php
          foreach ($events as $event) {
          ?>
          <a href="#" class="list-group-item list-group-item-action active">
            <?php echo $event["title"]; ?>
          </a>
        <?php } ?>
        </div>


      </div>



    </main>

<?php include("layouts/footer.php");?>

  </body>
</html>

<!--
<script>
  $('document').ready(function(){
    $('nomid').on('click',function(e){
      e.preventDefault();

      $('nomidbox').toggleClass('active'); /*dans le css on met #nomidbox.active{ display: none etc..}*/
      console.log('clic');
    })
  })
</script>
-->
