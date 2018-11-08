 <?php
   $id = $_GET['id'];
   $sql = "SELECT id, first_name, last_name
           FROM participants
           INNER JOIN members 
           ON participants.iduser = members.id
           WHERE idevent=:id";

   $stmt = $conn->prepare($sql);
   $stmt->bindValue(":id", $id);
   $stmt->execute();
   $participants = $stmt->fetchAll();

?>
