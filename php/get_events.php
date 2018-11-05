<?php
/* recupere les derniers evenements dans la bd */
  //connexion à la bd


  //requete sql
  $sql="SELECT *
        FROM events
        ORDER BY date_created DESC";

  //envoie la requête à MySQL, sans l'executer
  $stmt = $conn->prepare($sql);

  //demande à MySQL de l'executer
  $stmt->execute();

  //va chercher les résultats chez MySQL
  $events = $stmt->fetchAll();

  //on teste
  //print_r($events);
?>
