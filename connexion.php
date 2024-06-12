<?php
session_start();
require 'login.php'; // Fichier contenant les infos de connexion à la BDD

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $stmt = $conn->prepare('SELECT * FROM `Administration` WHERE nom_utilisateur = :id_administration');
    $stmt->bind_param('s', $nom_utilisateur);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hash, $role);
    $stmt->fetch();

    if (password_verify($mot_de_passe, $hash)) {
        $_SESSION['nom_utilisateur'] = $id;
        $_SESSION['role'] = $role;

        header('Location: accueil.php');
        exit;
    } else {
        echo 'Identifiants invalides.';
    }
}
?>
