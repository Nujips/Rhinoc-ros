<?php
require("php/db.php");
$error="";
?>

<?php include("layouts/header.php");?>

<main class="fond_blur">
	<h1>Créer évènement</h1>

	<form method="post" action="php/create_event.php">

		<div class="row">
      <!--Gauche-->
			<div class="col-sm-12 col-md-6">

				<div class="form-group">
					<label for="title">Titre</label>
					<input class="form-control" type="text" name="title" id="title">
				</div>

				<div class="form-group">
					<label for="description">Description: </label>
					<input class="form-control" type="textarea" name="description" id="description">
				</div>

				<div class="form-group">
					<label for="datestart">Date de début: </label>
					<input class="form-control" type="datetime-local" name="datestart" id="datestart">
				</div>

        <div class="form-group">
          <label for="dateend">Date de fin: </label>
          <input class="form-control" type="datetime-local" name="dateend" id="dateend">
        </div>

			</div>

      <!--droite-->
			<div class="col-sm-12 col-md-6">

				<div class="form-group">
					<label for="adress">Adresse de l'évènement: </label>
					<input class="form-control" type="text" name="adress" id="adress">
				</div>

				<div class="form-group">
					<label for="url">URL: </label>
					<input class="form-control" type="url" name="url" id="url">
				</div>

        <div class="form-group">
          <label for="price">Prix: </label>
          <input class="form-control" type="number" name="price" id="price">
        </div>

        <div class="form-group">
          <label for="participant_number">Nombre maximum de participants: </label>
          <input class="form-control" type="number" name="participant_number" id="participant_number">
        </div>

			</div>

		</div>

    <!--bouton valider-->

    <div class="form-group">
			<button type="submit" class="btn btn-success">Valider</button>
		</div>



	</form>
</main>


<?php include("layouts/footer.php");?>
