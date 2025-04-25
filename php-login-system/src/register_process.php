<?php
session_start();
require 'db_connection.php'; // Assurez-vous que ce fichier contient la connexion à votre base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = htmlspecialchars($_POST['username']); // Correspond à la colonne 'pseudo' dans la table
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérifier si l'utilisateur existe déjà
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    if (!$stmt) {
        die("Erreur SQL (SELECT) : " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Un utilisateur avec cet email existe déjà.";
        header("Location: signup.php");
        exit();
    } else {
        // Insérer l'utilisateur dans la base de données
        $stmt = $conn->prepare("INSERT INTO users (pseudo, email, password) VALUES (?, ?, ?)");
        if (!$stmt) {
            die("Erreur SQL (INSERT) : " . $conn->error);
        }
        $stmt->bind_param("sss", $pseudo, $email, $password);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Inscription réussie ! Connectez-vous.";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Erreur lors de l'inscription. Veuillez réessayer.";
            header("Location: signup.php");
            exit();
        }
    }

    $stmt->close();
    $conn->close();
} else {
    $_SESSION['error'] = "Méthode non autorisée.";
    header("Location: signup.php");
    exit();
}
?>