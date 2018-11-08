<?php

include_once("db.php");
$idevent = $_GET['id'];
$iduser = $_SESSION['member']['id'];

$sql = "SELECT * FROM participants WHERE iduser = :iduser AND idevent = :idevent";

	$stmt = $conn->prepare($sql);
	$stmt->bindValue (":iduser", $iduser);
	$stmt->bindValue (":idevent", $idevent);
	$stmt->execute();
	$estParticipant = $stmt->rowCount();


?>