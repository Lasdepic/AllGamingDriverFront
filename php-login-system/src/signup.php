<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Inscription</title>
</head>
<body>
<div class="rain"></div>
<div class="container">
<div class="logo">
        <img src="/img/Adobe Express - file.png" alt="logo" class="small-logo">
    </div>
    <h1>Inscription</h1>

    <form action="register_process.php" method="POST">
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="Pseudo" required>
        
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        
        <div class="password-container">
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <span class="toggle-password" onclick="togglePasswordVisibility()">
            👁️
        </span>
    </div>
        
        <button type="submit">S'inscrire</button>
        
    </form>

    
</div>

<?php
session_start();
require 'db_connection.php'; // Assurez-vous que ce fichier contient la connexion à votre base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérifier si l'utilisateur existe déjà
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Un utilisateur avec cet email existe déjà.";
    } else {
        // Insérer l'utilisateur dans la base de données
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "Inscription réussie ! <a href='login.php'>Connectez-vous ici</a>";
        } else {
            echo "Erreur lors de l'inscription. Veuillez réessayer.";
        }
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Méthode non autorisée.";
}
?>

<script>
        const rainContainer = document.querySelector('.rain');

        for (let i = 0; i < 100; i++) {
            const drop = document.createElement('div');
            drop.classList.add('rain-drop');
            drop.style.left = `${Math.random() * 100}vw`;
            drop.style.animationDuration = `${0.5 + Math.random()}s`;
            drop.style.animationDelay = `${Math.random() * 5}s`;
            rainContainer.appendChild(drop);
        }

        function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.textContent = '🙈'; 
        } else {
            passwordField.type = 'password';
            toggleIcon.textContent = '👁️'; 
        }
    }    

        
    </script>

</body>
</html>