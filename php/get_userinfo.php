<?php
/*on recupere l'id de l'user dans l'url*/
$iduser = $_GET['iduser'];

/*on recupere les info de la personne*/
$sql = "SELECT *
        FROM members
        WHERE members.id=:iduser";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":iduser", $iduser);
$stmt->execute();
$member = $stmt->fetch();

/*on recupere les infos des events que cette personne a cree*/
$sql = "SELECT *
        FROM events
        WHERE events.idcreator = :iduser ";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":iduser", $iduser);
$stmt->execute();
$member_event = $stmt->fetchAll();
?>
