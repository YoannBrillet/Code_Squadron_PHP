<!Doctype html>
<html>
    <head>
      <meta charset="utf-8" />
        <title>Mon Site</title>
        <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css" />
        <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/materialize.css" />
      	  <meta name="viewport" content="width=device-width, initial-scale=1">
      	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
      	  <script>
               $(document).ready(function() {
               $('select').material_select();
            });
            </script>

    </head>
    <body>
        <header>
			<div class="conteneur">
				<span>
					<a href="" title="Mon Site">MonSite.com</a>
                </span>
                <nav>
                    <div class="nav-wrapper">
                      <ul id="nav-mobile" class="right hide-on-med-and-down">
					<?php
					if(internauteEstConnecteEtEstAdmin()) // admin
					{ // BackOffice
						echo '<a  href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
						echo '<a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>';
						echo '<a href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a>';
					}
					if(internauteEstConnecte()) // membre et admin
					{
						echo '<a href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>';
						echo '<a href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>';
						echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
						echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>';
					}
					else // visiteur
					{
						echo '<a href="' . RACINE_SITE . 'inscription.php">Inscription</a>';
						echo '<a href="' . RACINE_SITE . 'connexion.php">Connexion</a>';
						echo '<a href="' . RACINE_SITE . 'boutique.php">Accés à la boutique</a>';
						echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
					}
					// visiteur=4 liens - membre=4 liens - admin=7 liens
					?>
				</nav>
			</div>
        </header>
        <section>
			<div class="conteneur">
