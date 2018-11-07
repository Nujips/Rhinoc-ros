<?php
require("php/db.php");
?>

<?php include("layouts/header.php");?>
<?php include("php/get_eventinfo.php");?>
<?php include("php/event_edit.php");?>

<main class="fond_blur">

	<!--securiser la page à la bonne personne-->
	<?php
	/*	il faut que la personne connectee ait le mm id que le idcreator de l'event */
		if($iduser == $creator['idcreator']){?>

	<h1>Modifier l'evenement </h1>

	<form method="post">

		<div class="row">
      <!--Gauche-->
			<div class="col-sm-12 col-md-6">

				<div class="form-group">
					<label for="title">Titre</label>
					<input class="form-control" type="text" name="title" id="title" value="<?php echo $eventinfo['title']?>">
				</div>

				<div class="form-group">
					<label for="description">Description: </label>
					<input class="form-control" type="textarea" name="description" id="description" value="<?php echo $eventinfo['description']?>">
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
					<input class="form-control" type="text" name="adress" id="adress" value="<?php echo $eventinfo['adress']?>">
				</div>

				<div class="form-group">
					<label for="url">URL: </label>
					<input class="form-control" type="text" name="url" id="url"  >
				</div>

        <div class="form-group">
          <label for="price">Prix: </label>
          <input class="form-control" type="number" name="price" id="price" value="<?php echo $eventinfo['price']?>">
        </div>

        <div class="form-group">
          <label for="participant_number">Nombre maximum de participants: </label>
          <input class="form-control" type="number" name="participant_number" id="participant_number" value="<?php echo $eventinfo['participant_number']?>">
        </div>

			</div>

		</div>

    <!--bouton valider-->

    <div class="form-group">
			<button type="submit" class="btn btn-success">Valider</button>
		</div>

	</form>
	<div class="form-group">
		<a href="php/delete_event.php?id=<?php echo $id?>"><button type="button" class="btn btn-success">Supprimer</button></a>
	</div>

<?php }
else{
	echo ("Vous n'avez pas acces à cette page!");
}?>
</main>


<?php include("layouts/footer.php");?>
