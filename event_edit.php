<?php
require("php/db.php");
$error="";
?>


<?php include("layouts/header.php");?>


<main class="fond_blur">
	<h1>Modifier l'evenement</h1>

	<form method="post">

		<div class="row">
      <!--Gauche-->
			<div class="col-sm-12 col-md-6">

				<div class="form-group">
					<label for="Title">Titre</label>
					<input class="form-control" type="text" name="title" id="title">
				</div>

				<div class="form-group">
					<label for="Description">Description</label>
					<input class="form-control" type="textarea" name="description" id="description">
				</div>

				<div class="form-group">
					<label for="email">Votre e-mail</label>
					<input class="form-control" type="email" name="email" id="email">
				</div>
			</div>

      <!--droite-->
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="password">Votre mot de passe</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>
				<div class="form-group">
					<label for="password_bis">Encore une fois?</label>
					<input class="form-control" type="password" name="password_bis" id="password_bis">
				</div>
			</div>
		</div>

	</form>
</main>

<!--********************************-->
<main>
  <h1>Modifier l'evenement </h1>
  <form method="post">
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <div>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <label></label>
      <button type="submit">Go !</button>
    </div>
    <div class="$error"> <?php echo $error; ?></div>
  </form>
</main>

<?php include("layouts/footer.php");?>
