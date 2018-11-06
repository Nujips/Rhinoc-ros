<?php
require("php/db.php");
$error="";

if(!empty($_POST)){

	$email = $_POST['email'];
	$password = $_POST["password"];


	//on va chercher le member en bdd en fonction de son Email

	$sql = "SELECT * FROM members WHERE email = :email ";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":email", $email);
	$stmt->execute();
	$member = $stmt -> fetch();

	//si on a trouvé un resultat
	if(!empty($member)){
		//on verifie son mdp
		$passwordIsOk = password_verify($password, $member['password']);
		//si le mdp est le bon...
		if($passwordIsOk){
			//on connecte le member
			session_start();
			$_SESSION['member'] = $member;
		}
		else {
			$error = "Mauvais identifiants!";
		}

	}
	else {
		$error = "Mauvais identifiants!";
	}


}

?>
