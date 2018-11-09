<?php
  $getIdCreator = $eventinfo["idcreator"];

  $sql = "SELECT *
          FROM members
          WHERE members.id = :getIdCreator";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":getIdCreator",   $getIdCreator);
  $stmt->execute();
  $resultIdCreator = $stmt->fetch();
?>
