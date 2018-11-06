<?php 
require_once("db.php");

//est-ce que le formulaire est soumis?
if (isset($_POST)) {
	//on créé des variables plus sympas
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_bis = $_POST['password_bis'];

	//on vérifie que les gens sont pas des abrutis
	if (empty($email)) {
		$error = "Merci de renseigner votre e-mail svp";		
	}
	elseif (empty($password)) {
		$error = "Avoir un mot de passe, c'est mieux";
	}
	elseif (empty($password_bis)) {
		$error = "Encore une fois stp";
	}

	//email valide?
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Ton email n'est pas valide";
	}
	if ($password != $password_bis) {
		$error = "Les mots de passes ne sont pas identiques";
	}





	// si le formulaire est valide
	if (empty($error)) {
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



		session_start();

		$_SESSION['email'] = $_POST['email'];

		header('Location: ../');
	} else {

		session_start();
		$_SESSION['errors'] = [

			'email' 	=> 'Merci de renseigner votre e-mail svp',
 
			'password' 	=> 'Avoir un mot de passe, c\'est mieux'

		];	

		header('Location: ../register.php');
	}
}
?>