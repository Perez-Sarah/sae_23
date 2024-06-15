<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration - Gestion des Bâtiments</title><!--title display-->
  <link rel="stylesheet" href="./styles/index2.css">
</head>
<body>
  <header>
    <h1>Administration</h1><!--title on html page-->
    <nav>
      <ul><!--setting up buttons in order to move through different pages-->
        <li><a class="button" href="index.html">Accueil</a></li>
        <li><a class="button" href="admin.php">Administration</a></li>
        <li><a class="button" href="login_gestion.php">Gestion</a></li>
        <li><a class="button" href="consul.php">Consultation</a></li>
        <li><a class="button" href="gestion_projet.html">Gestion de projet</a></li>
  	<li><a class="button1" href="logout_admin.php">Déconnexion</a></li>
      </ul>
   </nav>
  </header>
  <h2>Connexion Administrateur</h2> <!--Connexion on the account Admin-->
    <form><br/><br/></br>
      <h3>Ajouter un bâtiment</h3>
      <label for="nom_bat">Nom du bâtiment:</label>
      <input type="text" id="nom_bat" name="nom_bat"><br><br>
      <button type="submit">Ajouter</button>
    </form>
    <form>
      <h3>Ajouter un bâtiment</h3>
      <label for="nom_bat">Nom du bâtiment:</label>
      <input type="text" id="nom_bat" name="nom_bat"><br><br>
      <button type="submit">Ajouter</button>
     </form>
    <form>
      <h3>Ajouter un bâtiment</h3>
      <label for="nom_bat">Nom du bâtiment:</label>
      <input type="text" id="nom_bat" name="nom_bat"><br><br>
      <button type="submit">Ajouter</button>
    </form>
      </header>
 	<!-- Insert request in function of data sent by the chosebat.php form + "dynamic" displaying of building s data-->
	<?php
		include("connexion_db.php");
		// Get the values from the submitted form
		$name = $_POST['username'];
		$gest = $_POST['password'];
		// Insert the values into the 'batiments' table
		$request = "INSERT INTO `Batiment` (`nom`, `login`)
		VALUES ('$name', '$gest')";
		$result = mysqli_query($conn, $request) or die("Execution of the query $request failed");
		mysqli_close($conn);
       		// Display the added building information
		echo '<div>';
		echo "<strong>Le bâtiment suivant a été ajouté:</strong>";
		echo "<ul>
		<li>Nom du bâtiment: $name</li>
		<li>Gestionnaire du bâtiment: $gest</li>
		</ul>
		</div>";
?>

<footer><!--footnote-->
 <li><a href="https://www.iut-blagnac.fr/fr/" target="_blank">IUT de Blagnac </a></li>
 <li>Département Réseaux et télécommunications</li>
</footer>
</body>
</html>
