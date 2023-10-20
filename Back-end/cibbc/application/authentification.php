<?php
session_start();
include("config.php"); // Inclure le fichier de configuration de la base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = ? AND mot_de_passe = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nom_utilisateur, $mot_de_passe);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $_SESSION["nom_utilisateur"] = $nom_utilisateur;
        echo "Connecté avec succès"; // Vous pouvez retourner un message de succès ou rediriger l'utilisateur vers son espace personnel.
    } else {
        echo "Échec de la connexion";
    }
}
?>
