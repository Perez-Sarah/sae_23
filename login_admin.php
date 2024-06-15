<?php

    session_start();
    
    // Checking if already connected
    if (isset($_COOKIE['loggin']) && $_COOKIE['loggin'] === 'true' && isset($_COOKIE['usertype']) && $_COOKIE['usertype'] === 'admin' ) {

        header("Location: admin.php");                //changer chemin en fichier php pour faire le modif
        exit;
    }

    // else connect
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connexion_bd.php';

        $username = $_POST['username'];
        $password = $_POST['password'];


	// $username=$conn->real_escape_string($username);
        //$password=$conn->real_escape_string($password);


        $sql = "SELECT * FROM Administration WHERE username = '$username' AND mdp = '$password'";
        //$resultat_login = $conn->query($sql);
	$resultat_login = mysqli_query($conn, $sql);
        
if ($resultat_login) {
    if (mysqli_num_rows($resultat_login) == 1) {
        // Fetch and process the result
        $row = mysqli_fetch_assoc($resultat_login);

	setcookie('loggin', 'true', time() + (86400 * 5), "/");
        setcookie('usertype', 'admin', time() + (86400 * 5), "/");
        header("Location: admin.php");
	exit;
    } 
else {
       $error="No matching user found or multiple matches found.";
    }
} else {
    echo "Error: ".mysqli_error($conn);
    
}

mysqli_close($conn);

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login administrateur</title> <!--title display-->
  <link rel="stylesheet" href="./styles/index2.css"> <!--insert style for html page-->
</head>
<body>

    <h1>Login Administation</h1><!--title on html page-->
    <form method="post" action="">
        <label for="username">Nom d'user</label>
        <input type="text" name="username" required>
        <label for="password">Mdp</label>
        <input type="password" name="password" required>
        <input type="submit" value="Connexion">
    </form>
    <?php
        if (isset($error)) {
            echo "<p style='color:red; font-weight:bold;'>$error</p>";/*style poster*/
        }
    ?>
<footer><!--footnote-->
 <li><a href="https://www.iut-blagnac.fr/fr/" target="_blank">IUT de Blagnac </a></li>
 <li>Département Réseaux et Télécommunications</li>
</footer>
</body>
</html>
