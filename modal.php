
<!-- NE COPIE COLLE PAS CA -->
<?php include("php/db.php");
include("layouts/header.php");
include("php/get_events.php")

?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Test pour voir si ça amrche
</button>

<!-- COPIE COLLE CA DANS UN IF FORMULAIRE TRANSMIT-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $event['title'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vous être inscrit en tant que participant à l'évènement <?php echo $event['title'] ?> !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Youpi !</button>
      </div>
    </div>
  </div>
</div>