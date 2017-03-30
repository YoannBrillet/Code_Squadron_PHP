controlleur fait par baptiste 

1.usage
2.fonctionnement


1.Usage

pour utilisé le redirection_controller il faut ajouté la ligne suivente

<?php
include('./controler/redirection_controller.php');
 ?>


2. fonctionnement

pour pouvoire etre redirigé j'utilise le $_GET.
avec de requete sous la forme http://localhost/index?direction=action.

exemple:

index.html:


<!DOCTYPE html>
  <HTML>
     <HEAD>
        <TITLE>Index</TITLE>
     </HEAD>
     <BODY>
        <header>
          <form method="post"
            <ul>
          <li><a href="./index.html">Accueil</a></li>
          <li><a href="./index.html?direction=action1">acction 1</a></li>
          <li><a href="./index.html?direction=action2">acction 2</a></li>
            </ul>
        </header>
  </BODY>
</HTML>

 <?php
 include('./controller/redirection_controller.php');

  ?>

  redirection_controller.php :

  if(isset($_GET['direction'])){
    $reponse = $_GET['direction'];

    switch ($reponse) {
        case 'action1' :
        header('location: ./action1.html'); exit();
        case 'action2' :
        header('location: ./action2.html'); exit();
        default:
        header('location: vue/404.php'); exit();
      }

    }
