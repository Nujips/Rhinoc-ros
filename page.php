<?php
 $title ='Contact';
$description='';
?>

<!DOCTYPE html>
<html lang=fr>
<head>
  <?php include("layouts/head.php");?>
</head>

<body>
    <?php include("layouts/header.php");?>

    <br>
    <br>
    <br>

    <div class="container">
      <?php


      $users= [
        'Pierre',
        'Paul',
        'Jean',
      ]

      ?>

    <?php if(count($users)){?>

      <ul>
        <?php foreach ($users as $user) { ?>
          <li> <?php echo $user; ?></li>
        <?php } ?>
      </ul>

    <?php } ?>



      <!-- $tableau = array('ligne1' => 'Valeur 1'),  ou
      $tableau = [
        'user'=> [
          'name' => 'Cynthia',
          'age' => 1,
        ],
        'ligne1' => 'valeur2',
      ];
      var_dump ($tableau); -->



      <!-- $name = 'Cynthia';
      $mavar = 'Bonjour ' .$name;
      echo $mavar;
      var_dump($mavar);-->


      <!--boolean
      $var = true;
    -->


      <!-- ?> -->
     </div>

<!-- FORMULAIRE -->
     <form action="form.php" method="GET"> <!--traiter les données dans un fichier script-->

       <div class="form-group">
          <label for ="name">Nom</label>
       <input class="form-control" type = "text" name ="name" id ="name" requiered value="" >
      </div>

      <div class="form-group">
        <button type="submit">
          envoyer
          <span class="fas fa-check"></span>
        </button>

        <input type="submit" value="Envoyer">
      </div>

     </form>

    <?php include("layouts/footer.php");?>

  </body>
</html>

<!--
recuperer variable

dans page 1:
$_SESSION['name'] = 'Cynthia';
pour effacer la session -> unset($_SESSION);

dans page 2:
echo $_SESSION['name'];



se deconnecter
session_start();
session_destroy();
header('Location: index.php')
-->
