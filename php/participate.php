<?php
  session_start();
  require('db.php');

  $idevent = $_GET['id'];
  $iduser = $_SESSION['member']['id'];

  $sql = "INSERT INTO participants VALUES (:iduser, :idevent)";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(":iduser", $iduser);
  $stmt->bindValue(":idevent", $idevent);
  $stmt->execute();

  header('Location: ../myprofil.php');

?>
