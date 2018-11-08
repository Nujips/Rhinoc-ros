 <?php
   $id = $_GET['iduser'];
   $sql = "SELECT iduser
           FROM participants
           where idevent=:id";

   $stmt = $conn->prepare($sql);
   $stmt->bindValue(":id", $id);
   $stmt->execute();
   $participants = $stmt->fetchAll();






     $sql = "SELECT *
           FROM events
           JOIN participants
           ON events.id = participants.idevent and participants.iduser = :id";
     $stmt = $conn->prepare($sql);
    $stmt->bindValue(":id", $id);
     $stmt->execute();
     $participant_event = $stmt->fetchAll();
  ?>
