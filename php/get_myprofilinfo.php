<?php
/*on récupere l'id de la personne connectee*/
$iduser = $_SESSION['member']['id'];

/*on recupere toutes les informations de celle-ci*/
$sql = "SELECT *
FROM members
WHERE id = :iduser";

$stmt = $conn->prepare($sql);
$stmt-> bindValue(":iduser", $iduser);
$stmt->execute();
$user = $stmt->fetch();


/*On recupere ses evenements*/
$sql = "SELECT *
FROM events
WHERE events.idcreator = :iduser ";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":iduser", $iduser);
$stmt->execute();
$member_event = $stmt->fetchAll();
?>
