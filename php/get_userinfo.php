<?php

$iduser = $_GET['iduser'];
$sql = "SELECT *
FROM members
WHERE members.id=:iduser";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":iduser", $iduser);
$stmt->execute();
$member = $stmt->fetch();

$sql = "SELECT *
FROM events
WHERE events.idcreator = :iduser ";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":iduser", $iduser);
$stmt->execute();
$member_event = $stmt->fetchAll();
?>
