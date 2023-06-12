<?php
// register.php

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire

    $email = $_POST['email'];
    $mdp = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Vérifier si les mots de passe correspondent
    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Effectuer d'autres validations si nécessaire

    // Enregistrer les informations dans la base de données
    // Remplacez les informations de connexion à la base de données par les vôtres
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopeconnect";

    // Créer une connexion à la base de données