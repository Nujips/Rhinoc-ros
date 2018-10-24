<?php
 $title ='Contact';
$description='';
?>

<!DOCTYPE html>
<html lang=fr>
<head>
  <?php include("layouts/head.php");?>
</head>

<body>
    <?php include("layouts/header.php");?>

    <main id="content">
      blablabla
    </main>

    <script>
      $('document').ready(function(){
        $('nomid').on('click',function(e){
          e.preventDefault();

          $('nomidbox').toggleClass('active'); /*dans le css on met #nomidbox.active{ display: none etc..}
          console.log('clic');
        })
      })
    </script>

    <?php include("layouts/footer.php");?>

  </body>
</html>
