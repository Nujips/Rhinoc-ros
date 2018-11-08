<?php
  require("db.php");
  session_start();

  $id = $_GET['id'];
  $sql = "DELETE FROM events
          WHERE id=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":id", $id);
  $stmt->execute();

  header('Location: ../myprofil.php');

  ?>
