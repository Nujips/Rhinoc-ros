<?php

  $id = $_GET['id'];
  $sql = "SELECT *
          FROM events
          WHERE id=:id";

  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();
  $eventinfo = $stmt->fetch();

  ?>
