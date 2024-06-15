
<?php

    session_start();
    
    // Checking if already connected
    if (isset($_COOKIE['loggin']) && $_COOKIE['loggin'] === 'true' && isset($_COOKIE['usertype']) && $_COOKIE['usertype'] === 'admin' ) {

        header("Location: gestion.php");                //changer chemin en fichier php pour faire le modif
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
        
        if ($resultat_login->num_rows == 1) {
            $row = $resultat_login->fetch_assoc();


            $sql = "SELECT nom_bat FROM batiments WHERE gestion = '$username';";
            $resultat_bat = $conn->query($sql);

             

            header("Location: admin.php"); // changer pour un gestion.php
            exit;
		}
        else {
            $error = "Login incorrect";
        }

        $conn->close();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login gestionnaire</title>
</head>
<body>

    <h1>Login gestionnaire</h1>
    
    <form method="post" action="">
        <label for="username">Nom d'user</label>
        <input type="text" name="username" required>
        <label for="password">Mdp</label>
        <input type="password" name="password" required>
        <input type="submit" value="Connexion">
    </form>
    <?php
        if (isset($error)) {
            echo "<p style='color:red; font-weight:bold;'>$error</p>";
        }
    ?>

  
</body>
</html>
