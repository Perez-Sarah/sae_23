<?php
$page_title = "Accueil";
include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAE23 Accueil</title>
  <link rel="stylesheet" href="styles/gestion.css">
</head>
<body>
  <header>
    <h1>Gestion</h1>
    <nav>
      <ul>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="administration.html">Administration</a></li>
        <li><a href="gestion.html">Gestion</a></li>
        <li><a href="consultation.html">Consultation</a></li>
        <li><a href="gestion_projet.html">Gestion de projet</a></li>
      </ul>
    </nav>
  </header>
  <main>

<h2>Objectif du site</h2>
<p>Notre objectif est de gérer les bâtiments, salles et capteurs pour un suivi optimal des conditions environnementales.</p>

<h3>Bâtiments gérés</h3>
<ul>
  <?php
  
  
  $sql = "SELECT name FROM buildings";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<li>" . $row["name"] . "</li>";
      }
  } else {
      echo "<li>Aucun bâtiment trouvé</li>";
  }
  ?>
</ul>

<h3>Salles équipées</h3>
<ul>
  <?php
  $sql = "SELECT name FROM rooms";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<li>" . $row["name"] . "</li>";
      }
  } else {
      echo "<li>Aucune salle trouvée</li>";
  }
  ?>
</ul>
</main>
</body>
</html>

