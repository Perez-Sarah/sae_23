<?php

    session_start();
    
    // Checking if already connected
    if (isset($_COOKIE['loggin']) && $_COOKIE['loggin'] === 'true' &&
        isset($_COOKIE['usertype']) === $_COOKIE['usertype'] === 'gestionnaire' ) {

        header("Location: gestil");                //changer chemin en fichier php pour faire le modif
        exit;
    }

    // else connect
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connexion_bd.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql= "SELECT * FROM Gestionnaire WHERE username = '$username' AND mdp = '$password'";
        $resultat_login=$conn->query($sql);
        
        if ($resultat_login->num_rows == 1) {
            $row = $resultat_login->fetch_assoc();


            $sql = "SELECT nom_bat FROM batiments WHERE gestion = '$username';"
            $resultat_bat = $conn->query($sql);

            if ($resultat_bat->num_rows > 0) {
                $bat=$resultat_bat->fetch_assoc()['nom_bat'];

                setcookie('loggin', 'true', time() + (86400 * 5), "/");
                setcookie('usertype', 'gestionnaire', time() + (86400 * 5), "/");
                setcookie('building', $bat, time() + (86400 * 5), "/");
            } else {
                $error="Ce gestionnaire n'a pas de bâtiment associé.";
            }

            header("Location: gestion.html"); // changer pour un gestion.php
            exit;
        } else {
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
            echo "<p style='color:red; font-weight:bold;'>$error</p>"
        }
    ?>

  
</body>
</html>
