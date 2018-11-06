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



	//email valide?
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['errors']['email'] = "Ton email n'est pas valide";
	}
	if ($password != $password_bis) {
		$_SESSION['errors']['email'] = "Les mots de passes ne sont pas identiques";
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