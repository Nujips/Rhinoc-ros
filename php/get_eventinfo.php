<?php
  $id = $_GET['id'];
  $sql = "SELECT *
          FROM events
          WHERE id=:id";

  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();
  $eventinfo = $stmt->fetch();

  /*----------------RECUPERER L'ID DE LA PERSONNE CONNCECTEE------------------*/
  $iduser = $_SESSION['member']['id'];
  /*----------------RECUPERER L'ID DE L'EVENT------------------*/
  /*$id=$_GET['id']; pas besoin car deja dans le get_eventinfo*/

  /*selectionner l'idcreator de levent*/
  /*----faire une requete qui recupere l'idcreator de la personne de l'event-----*/
  $sql= "SELECT idcreator FROM events WHERE id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();
  $creator=$stmt->fetch();

  ?>
