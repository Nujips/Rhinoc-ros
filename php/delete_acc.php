<?php

/****Ne fonctionne pas *****/
require("db.php");

$id = $_SESSION['member']['id'];

$sql = "DELETE FROM members, events WHERE members.id = $id AND events.idcreator = $id";


$stmt = $conn->prepare($sql);
$stmt->bindValue (':id', $id);
$stmt->execute();

header('Location: ../index.php');
?>
