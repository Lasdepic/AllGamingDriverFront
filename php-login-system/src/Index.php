<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Homepage</title>
</head>

<body>
<div class="rain"></div>
<canvas id="rain-canvas"></canvas>
<div class="container centered; align-items-center">
    <div class="logo">
        <img src="/img/Adobe Express - file.png" alt="logo" class="small-logo">
    </div>
    <h1>Bienvenue <br>sur</h1>
    <h2 style="color: white">Gaming Room Driver</h2>
    <div class="links">
        <?php
        session_start();

        if (isset($_SESSION['username'])) {
            echo "<p>Bienvenue, " . htmlspecialchars($_SESSION['username']) . "!</p>";
            echo '<a href="dashboard.php" class="button">Tableau de bord</a>';
            echo '<a href="logout.php" class="button">Déconnexion</a>';
        } else {
            echo '<a href="login.php" class="button">Connexion</a>';
            echo '<a href="signup.php" class="button">Inscription</a>';
        } 
        ?>
    </div>
</div>

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
</script>
</body>
</html>