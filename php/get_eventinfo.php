<?php
  /*--faire une requete qui permet de recuperer les infos de l'event en question---- */
  $id = $_GET['id'];
  $sql = "SELECT *
          FROM events
          WHERE id=:id";

  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();
  $eventinfo = $stmt->fetch();

  /*----faire une requete qui recupere l'idcreator de la personne de l'event-----*/
  $sql= "SELECT idcreator FROM events WHERE id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();
  $creator=$stmt->fetch();

  ?>
