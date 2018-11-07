<?php

  //2-  Avec cette requete sql, on cherche à avoir les informations de la personne qui a crée l'evenement en fonction de l'id de ce dernier

  //On récupère l'id de l'evenement en question
  $getIdCreator = $eventinfo["idcreator"];

  $sql = "SELECT *
          FROM members
          WHERE members.id = :getIdCreator";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":getIdCreator",   $getIdCreator);
  $stmt->execute();
  $resultIdCreator = $stmt->fetch();
?>
