<?php 
require("php/db.php");


$error ="";

if (!empty($_POST)) {

	$email = $_POST['email'];
	$password= $_POST["password"];


	$sql = "SELECT * FROM members WHERE email = :email";

	$stmt = $conn->prepare($sql);
	$stmt->bindValue (":email", $email);
	$stmt->execute();
	$member = $stmt->fetch();

	if (!empty($member)) {
		$passwordIsOk = password_verify($password, $member['password']);

		if ($passwordIsOk) {

			$_SESSION['member'] = $member;
		}
		else {
			$error="Mauvais identifiant";
		}
	}

	else {	
		$error="Mauvais identifiant";
	}


}?>

<?php include("layouts/header.php");?>

<div class="fond_blur">
	<h1>Connectez vous</h1>
	<h2>Pour participer aux meilleurs évènements de Nantes</h2>
	<div class="row">	
		<div class="col-sm-12 col-md-6">	
			<div class="form-group">
				<label for="email">Votre e-mail</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
		</div>
		<div class="col-sm-12 col-md-6">	
			<div class="form-group">
				<label for="password">Votre mot de passe</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
		</div>
	</div>
	<div class="error"><?php echo $error; ?></div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Valider</button>
	</div>
</div>

<?php include("layouts/footer.php");?>
