<?php

if(isset($_GET['direction'])){
  $reponse = $_GET['direction'];

  switch ($reponse) {
      case 'valu' :
      header('location: ./PAGEVISE ici'); exit();

      default:
      header('location: vue/404.php'); exit();
    }

  }
