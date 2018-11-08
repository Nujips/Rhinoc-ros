 <?php
   $id = $_GET['id'];
   $sql = "SELECT iduser
           FROM participants
           where idevent=:id";

   $stmt = $conn->prepare($sql);
   $stmt->bindValue(":id", $id);
   $stmt->execute();
   $participants = $stmt->fetchAll();

?>
