<?php
// login.php

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Valider les données et effectuer des actions supplémentaires
// Vérifier les informations d'authentification avec la base de données, etc.

// Exemple d'enregistrement des données dans une base de données
// Remplacez les informations de connexion à la base de données par les vôtres
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopeconnect";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier si la connexion a échoué
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Échapper les valeurs pour éviter les injections SQL
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

// Exécuter la requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO utilisateurs (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Les données ont été enregistrées avec succès.";
} else {
    echo "Erreur lors de l'enregistrement des données : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>