<footer>
  <p>
    <?php
      if (empty($_SESSION['member'])){
        echo "Vous n'êtes pas connecté";
      }
      else{
        echo "Vous êtes connecté ------------"; /*echo "Vous êtes connecté en tant que" . $_SESSION['member']['username'];*/
      }
    ?>
  </p>
<div class="coucou"> Cynthia et Séréna | WIS School | 2018 </div>
  <?php include_once('layouts/javascript.php');?>
</footer>
</body>
</html>
