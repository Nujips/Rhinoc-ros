<?php include("layouts/header.php");?>

<?php
	//var_dump($_SESSION);
	//die();
?>
<main class="fond_blur">
	<h1>Inscrivez vous</h1>
	<h2>Pour participer aux meilleurs évènements de Nantes</h2>
	<form method="post" action="php/register.php">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="last_name">Votre nom</label>
					<input class="form-control" type="text" name="last_name" id="last_name">
					<?php if(isset($_SESSION['errors']) && array_key_exists('last_name', $_SESSION['errors'])){ ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['last_name']; ?>
						</div>
					<?php } ?>
				</div>
				<div class="form-group">
					<label for="first_name">Votre prénom</label>
					<input class="form-control" type="text" name="first_name" id="first_name">
					<?php if(isset($_SESSION['errors']) && array_key_exists('first_name', $_SESSION['errors'])){ ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['first_name']; ?>
						</div>
					<?php } ?>
				</div>
				<div class="form-group">
					<label for="email">Votre e-mail</label>
					<input class="form-control" type="email" name="email" id="email">
					<?php if(isset($_SESSION['errors']) && array_key_exists('email', $_SESSION['errors'])){ ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['email']; ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="password">Votre mot de passe</label>
					<input class="form-control" type="password" name="password" id="password">
					<?php if(isset($_SESSION['errors']) && array_key_exists('password', $_SESSION['errors'])){ ?>
						<div class="alert alert-danger mt-2">
							<?php echo $_SESSION['errors']['password']; ?>
						</div>
					<?php } ?>
				</div>
				<div class="form-group">
					<label for="password_bis">Encore une fois?</label>
					<input class="form-control" type="password" name="password_bis" id="password_bis">
				</div>
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-light">Valider</button>
		</div>
	</form>
</main>

<?php $_SESSION['errors'] = null; ?>

<?php include("layouts/footer.php");?>
