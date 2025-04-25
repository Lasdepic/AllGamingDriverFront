<?php
// filepath: c:\Users\Jordan\Documents\Travail\Site Web\All Gaming Driver\AllGamingDriverFront\php-login-system\src\db_connection.php

$servername = "localhost";
$username = "admin"; // Remplacez par votre nom d'utilisateur MySQL
$password = "admin"; // Remplacez par votre mot de passe MySQL
$dbname = "faille"; // Remplacez par le nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>