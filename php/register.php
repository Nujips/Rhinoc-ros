<?php 
require_once("db.php");
session_start();

//est-ce que le formulaire est soumis?
if (isset($_POST)) {
	//on créé des variables plus sympas
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_bis = $_POST['password_bis'];

	if (empty($password)) {
		$error = "Renseigne ton mot de passe";
	}
	elseif (empty($passwordBis)) {
		$error = "Encore une fois stp";
	}

	//email valide?
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errors']['email'] = "Ton email n'est pas valide";
	}
	if ($password != $password_bis) {
		$_SESSION['errors']['password'] = "Les mots de passes ne sont pas identiques";
	}
	if (isset($first_name)) {
		$_SESSION['errors']['first_name'] = "Ce champ est obligatoire";
	}
	if (isset($last_name)) {
		$_SESSION['errors']['last_name'] = "Ce champ est obligatoire";
	}
	if (isset($password)) {
		$_SESSION['errors']['password'] = "Ce champ est obligatoire";
	}
	if (isset($password_bis)) {
		$_SESSION['errors']['password_bis'] = "Ce champ est obligatoire";
	}
	if (isset($email)) {
		$_SESSION['errors']['email'] = "Ce champ est obligatoire";
	}





	// si le formulaire est valide
	if (empty($_SESSION['errors'])) {
		$sql="INSERT INTO members (first_name, last_name, email, password, date_created)
		VALUES (:first_name, :last_name, :email, :password, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":first_name", $first_name);
		$stmt->bindValue(":last_name", $last_name);
		$stmt->bindValue(":email", $email);

		//algo par défaut: bcrypt
		$password = password_hash($password, PASSWORD_DEFAULT,['cost' => 15]);
		$stmt->bindValue(":password", $password);
		$stmt->execute();

		$_SESSION['email'] = $_POST['email'];
		header('Location: ../');
	} else {
		header('Location: ../register.php');
	}
}