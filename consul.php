<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation - Gestion des Bâtiments</title> <!--title display-->
  <link rel="stylesheet" href="./styles/index2.css"><!--insert style for html page-->
</head>
<body>
  <header>
    <h1>Consultation</h1><!--title on html page-->
    <nav>
      <ul><!--setting up buttons in order to move through different pages-->
        <li><a class="button" href="index.html">Accueil</a></li>
        <li><a class="button" href="login_admin.php">Administration</a></li>
        <li><a class="button" href="login_gestion.php">Gestion</a></li>
        <li><a class="button" href="consul.php">Consultation</a></li>
        <li><a class="button" href="gestion_projet.html">Gestion de projet</a></li>
      </ul>
    </nav>
  </header>
  <section><!--separate different parts-->
    <h2>Dernières mesures des capteurs</h2><!--first part-->
    <p>Affichage des dernières mesures de tous les capteurs.</p>
<?php

		include("data.php"); //used this data.php
		echo"E208";
	?>

  </section>
<footer><!--footnote-->
 <li><a href="https://www.iut-blagnac.fr/fr/" target="_blank">IUT de Blagnac </a></li>
 <li>Département Réseaux et Télécommunications</li>
</footer>
</body>
</html>
