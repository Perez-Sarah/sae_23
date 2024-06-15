<?php
   // Checking if already connected
    if (isset($_COOKIE['loggin']) && $_COOKIE['loggin'] === 'true' && isset($_COOKIE['usertype']) && $_COOKIE['usertype'] === 'gestionnaire' ) {

        header("Location: gestion.php");                //changer chemin en fichier php pour faire le modif
        exit;
    }

    // else connect
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'connexion_bd.php';/*include  this connexion_bd.php*/

        $username = $_POST['username'];
        $password = $_POST['password'];


	 $sql = "SELECT * FROM Gestionnaire WHERE username = '$username' AND mdp = '$password'";/*search the database manager table*/
	 $connect_login = mysqli_query($conn, $sql);


if ($connect_login && mysqli_num_rows($connect_login) == 1) {
    $row_gestionnaire = mysqli_fetch_assoc($connect_login);

    // SQL query to get batiment
    $sql = "SELECT nom_bat FROM Batiment WHERE gestion = '$username'";
    $connect_bat = mysqli_query($conn, $sql);

    // Check if query was successful and if there are rows returned
    if ($connect_bat && mysqli_num_rows($connect_bat) > 0) {
  ;

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
  <title>Login gestionnaire</title> <!--title display-->
  <link rel="stylesheet" href="./styles/index2.css"> <!--insert style for html page-->
</head>
<body>

    <h1>Login gestionnaire</h1> <!--title on html page-->
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
<footer> <!--footnote-->
 <li><a href="https://www.iut-blagnac.fr/fr/" target="_blank">IUT de Blagnac </a></li>
 <li>Département Réseaux et télécommunications</li>
</footer>
</body>
</html>
