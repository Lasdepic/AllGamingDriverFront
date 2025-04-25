<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Login</title>
</head>
<body>
    <!-- Pluie -->
    <div class="rain"></div>

    <div class="container">
    <div class="logo">
        <img src="/img/Adobe Express - file.png" alt="logo" class="small-logo">
    </div>

        <h1>Connexion</h1>

        <form action="" method="POST">
    <label for="username"></label>
    <input type="text" id="username" name="username" placeholder="Pseudo" required>

    <label for="password"></label>
    <div class="password-container">
        <input type="password" id="password" name="password" placeholder="mot de passe" required>
        <span class="toggle-password" onclick="togglePasswordVisibility()">
            👁️
        </span>
    </div>

    <button type="submit" name="login">Se connecter</button>
    <a href="signup.php">Inscription</a>
</form>

        <?php
        session_start();
        require 'db_connection.php'; 

        if (isset($_POST['login'])) {
            $pseudo = $_POST['username'];
            $password = $_POST['password'];

            // Préparer la requête pour vérifier l'utilisateur
            $stmt = $conn->prepare("SELECT * FROM users WHERE pseudo = ?");
            if (!$stmt) {
                die("Erreur SQL : " . $conn->error);
            }
            $stmt->bind_param("s", $pseudo);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Vérifier le mot de passe
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $user['pseudo']; 
                    header("Location: dashboard.php"); 
                    exit();
                } else {
                    echo "<p>Mot de passe incorrect.</p>";
                }
            } else {
                echo "<p>Nom d'utilisateur non trouvé.</p>";
            }

            $stmt->close();
        }

        $conn->close();
        ?>

    </div>

    <!-- Script pour la pluie -->
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

        // Fonction pour basculer la visibilité du mot de passe
        
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
