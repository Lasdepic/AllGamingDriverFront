<?php
// filepath: c:\Users\Jordan\Documents\Travail\Site Web\All Gaming Driver\AllGamingDriverFront\php-login-system\src\db_connection.php

$servername = "localhost";
$username = "admin"; 
$password = "admin"; 
$dbname = "faille"; 

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>