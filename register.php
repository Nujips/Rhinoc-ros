<?php 
require("php/db.php");
$error="";

//est-ce que le formulaire est soumis?
if (!empty($_POST)) {
//on créé des variables plus sympas
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$passwordBis = $_POST['password_bis'];

//on vérifie que les gens sont pas des abrutis
	if (empty($email)) {
		$error = "Merci de renseigner votre e-mail svp";		
	}
	elseif (empty($password)) {
		$error = "Avoir un mot de passe, c'est mieux";
	}
	elseif (empty($passwordBis)) {
		$error = "Encore une fois stp";
	}

//email valide?
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Ton email n'est pas valide";
	}


	if ($password != $passwordBis) {
		$error = "Apprend à taper sur un clavier";
	}


// si le formulaire est valide
	if (empty($error)) {
		$sql="INSERT INTO members 
		VALUES (NULL, :first_name, :last_name, :email, :password, NOW())";

		$stmt = $conn->prepare($sql);

		$stmt->bindValue(":username", $username);
		$stmt->bindValue(":email", $email);

//algo par défaut: bcrypt
		$password = password_hash($password, PASSWORD_DEFAULT,[
'cost' => 15 //pour faire en sorte que le chargement soit lent pour dissuader les hackeurs
]);

		$stmt->bindValue(":password", $password);

		$stmt->execute();
	}
}

?>
<?php include("layouts/header.php");?>


<main class="container fond_blur">
	<h1>Inscrivez vous sur notre majestueux site</h1>
	<form method="post">

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="last_name">Votre nom</label>
					<input class="form-control" type="text" name="last_name" id="last_name">
				</div>
				<div class="form-group">
					<label for="first_name">Votre prénom</label>
					<input class="form-control" type="text" name="first_name" id="first_name">
</div>
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
				<div class="form-group">
					<label for="password_bis">Encore une fois?</label>
					<input class="form-control" type="password" name="password_bis" id="password_bis">
				</div>
				<div class="form-group">
					<label for="phone_number">Votre numéro?</label>
					<input class="form-control" type="text" name="phone_number" id="phone_number">
				</div>
			</div>
		</div>

		<div class="error"><?php echo $error; ?></div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">Valider</button>
		</div>
	</form>
</main>

<?php include("layouts/footer.php");?>