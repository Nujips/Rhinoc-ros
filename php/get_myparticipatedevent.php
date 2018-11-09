<?php
$id = $_SESSION['member']['id'];
$sql = "SELECT *
        FROM events
        JOIN participants
        ON events.id = participants.idevent and participants.iduser = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$myparticipant_event = $stmt->fetchAll();
?>
