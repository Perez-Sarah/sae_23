<?php
$page_title = "Accueil";
include('includes/db_connect.php');
include('includes/header.php');
?>

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

<?php
include('includes/footer.php');
?>
