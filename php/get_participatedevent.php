
<?php
    $id = $_GET['iduser'];
     $sql = "SELECT *
           FROM events
           JOIN participants
           ON events.id = participants.idevent and participants.iduser = :id";
     $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $id);
     $stmt->execute();
     $participant_event = $stmt->fetchAll();
  ?>
