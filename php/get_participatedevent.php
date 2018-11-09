<?php
/*on recupere l'id de la personne dans l'url*/
$id = $_GET['iduser'];
/*on recupere les evenements auxquels cette parsonne participe*/
$sql = "SELECT *
        FROM events
        JOIN participants
        ON events.id = participants.idevent and participants.iduser = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$participant_event = $stmt->fetchAll();
?>
