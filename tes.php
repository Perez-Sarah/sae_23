<?php
   // Checking if already connected
    if (isset($_COOKIE['loggin']) && $_COOKIE['loggin'] === 'true' && isset($_COOKIE['usertype']) && $_COOKIE['usertype'] === 'gestionnaire' ) {

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

	 $sql = "SELECT * FROM Gestionnaire WHERE username = '$username' AND mdp = '$password'";
	 $resultat_login = mysqli_query($conn, $sql);

// Check if exactly one row is returned
if ($resultat_login && mysqli_num_rows($resultat_login) == 1) {
    $row = mysqli_fetch_assoc($resultat_login);

    // SQL query to get batiment
    $sql = "SELECT nom_bat FROM Batiment WHERE gestion = '$username'";
    $resultat_bat = mysqli_query($conn, $sql);

    // Check if query was successful and if there are rows returned
    if ($resultat_bat && mysqli_num_rows($resultat_bat) > 0) {
  //      $bat = mysqli_fetch_assoc($resultat_bat)['nom_bat'];

        setcookie('loggin', 'true', time() + (86400 * 5), "/");
        setcookie('usertype', 'gestionnaire', time() + (86400 * 5), "/");
        setcookie('building', $bat, time() + (86400 * 5), "/");

        header("Location: gestion.php"); // changer pour un gestion.php
       exit;
    } else {
        $error = "Ce gestionnaire n'a pas de bâtiment associé.";
    }
} else {
    $error = "Login incorrect";
}

// Close the connection
mysqli_close($conn);

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
