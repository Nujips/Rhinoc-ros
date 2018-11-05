<?php

  $sql = "SELECT *
          FROM events
          JOIN members
          ON events.idcreator=members.id";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $member = $stmt->fetch();
?>
