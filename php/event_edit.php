<?php
/*recupere les infos de l'event*/
require('db.php');
session_start();
$error="";

if(!empty($_POST)){

	/*on recupere les valeurs*/
	$id = $_POST['id'];
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
	elseif (empty($participant_number)){
		$error = "Veuillez renseigner la date de fin!";
	}

	if(empty($error)){

	/*mettre les infos dans la bd*/

	$sql="UPDATE events
				SET title = :title, description = :description, date_start=:datestart, date_end=:dateend, adress=:adress, url=:url, price=:price, participant_number=:participant_number
	 			WHERE id = :id";/*id de l'event*/

	$stmt = $conn->prepare($sql);

	$stmt->bindValue(":id", $id);
	$stmt->bindValue(":title", $title);
	$stmt->bindValue(":description", $description);
	$stmt->bindValue(":datestart", $datestart);
	$stmt->bindValue(":dateend", $dateend);
	$stmt->bindValue(":adress", $adress);
	$stmt->bindValue(":url", $url);
	$stmt->bindValue(":price", $price);
	$stmt->bindValue(":participant_number", $participant_number);

	$stmt->execute();

	header('Location: ../index.php'); 
	}

}


?>
