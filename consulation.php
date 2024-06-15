<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultation - Gestion des Bâtiments</title>
  <link rel="stylesheet" href="./sae_23/styles/consultation.css">
</head>
<body>
  <header>
    <h1>Consultation</h1>
    <nav>
      <ul>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="login_admin.php">Administration</a></li>
        <li><a href="login_gestion.php">Gestion</a></li>
        <li><a href="consultation.html">Consultation</a></li>
        <li><a href="gestion_projet.html">Gestion de projet</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Dernières mesures des capteurs</h2>
    <p>Affichage des dernières mesures de tous les capteurs.</p>
    <!-- Contenu dynamique basé sur les données des capteurs -->
	<?php
		echo "cpucp";
	?>
  </main>
  <footer>
    <p>Mentions légales: Ce site est un projet fictif.</p>
  </footer>
</body>
</html>
