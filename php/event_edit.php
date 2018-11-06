<?php
require("php/db.php");
$error="";
/*----------------RECUPERER L'ID DE LA PERSONNE CONNCECTEE------------------*/
$iduser = $_SESSION['member']['id'];
/*----------------RECUPERER L'ID DE L'EVENT------------------*/


if(!empty($_POST)){

	/*on recupere les valeurs*/
	$title = $_POST['title'];
	$description = $_POST['description'];
	$datestart = $_POST['datestart'];
	$dateend = $_POST['dateend'];

	$adress = $_POST['adress'];
	$url = $_POST['url'];
	$price = $_POST['price'];
	$participant_number = $_POST['participant_number'];

	/*verification des erreurs*/
	if(empty($title)){
		$error = "Veuillez renseigner le titre!";
	}
	elseif (empty($description)){
		$error = "Veuillez renseigner la description!";
	}
	elseif (empty($datestart)){
		$error = "Veuillez renseigner la date de debut!";
	}
	elseif (empty($dateend)){
		$error = "Veuillez renseigner la date de fin!";
	}
	elseif (empty($adress)){
		$error = "Veuillez renseigner l'adresse'!";
	}
	elseif (empty($url)){
		$error = "Veuillez renseigner l'url'!";
	}
	elseif (empty($price)){
		$error = "Veuillez renseigner le prix'!";
	}
	elseif (empty($participant_number)){
		$error = "Veuillez renseigner la date de fin!";
	}

	if(empty($error)){

	/*mettre les infos dans la bd*/
	$sql = "INSERT INTO events
					VALUES(NULL, :title, :description, :datestart, :dateend, :iduser, :adress, :url, NOW(), :price, :participant_number )
					WHERE events.id= :id";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":id", $id);
	$stmt->bindValue(":title", $title);
	$stmt->bindValue(":description", $description);
	$stmt->bindValue(":datestart", $datestart);
	$stmt->bindValue(":dateend", $dateend);
	$stmt->bindValue(":iduser", $iduser);
	$stmt->bindValue(":adress", $adress);
	$stmt->bindValue(":url", $url);
	$stmt->bindValue(":price", $price);
	$stmt->bindValue(":participant_number", $participant_number);
	$stmt->execute();
	header('Location: info.php');
	}
}


?>
