<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Graphique</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>

<!-- Effet Pluie -->
<div class="rain"></div>

<!-- Canvas optionnel si tu veux en faire quelque chose -->
<canvas id="rain-canvas"></canvas>

<header class="transparent-header">
    <nav class="navbar">
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#">Driver</a>
                <ul class="dropdown-menu">
                    <li><a href="/pages/Drivers/graphicsCard.php">Carte Graphique</a></li>
                    <li><a href="/pages/Drivers/launcher.php">Launcher</a></li>
                    <li><a href="/pages/Drivers/speak.php">Discussion</a></li>
                </ul>
            </li>
            <li><a href="/pages/Drivers/speak.php">Discussion</a></li>
            <li><a href="/pages/retroGaming.php">Retro Gaming</a></li>
        </ul>

        <!-- Bouton de déconnexion -->
        <form action="/php-login-system/src/Index.php" method="POST" style="display: inline;">
            <button type="submit" class="logout-btn">Déconnexion</button>
        </form>
    </nav>
</header>

<!-- Contenu principal -->
<main class="container">
    <h1>Launchers de Jeux PC</h1>
    <p>Bienvenue sur la page des launchers de jeux PC !</p>
    <p>Téléchargez les derniers launchers de jeux pour accéder à vos titres préférés :</p>

    <div class="download-links">
        <a href="https://store.steampowered.com/about/" target="_blank" class="download-btn">
            <img src="/img/logo/steam.png" alt="Steam" class="logo-img">
            Steam
        </a>
        <a href="https://us.battle.net/account/download/" target="_blank" class="download-btn">
            <img src="/img/logo/Batllenet.png" alt="Battle.net" class="logo-img">
            Battle.net
        </a>
        <a href="https://www.origin.com/" target="_blank" class="download-btn">
            <img src="/img/logo/origin.png" alt="Origin" class="logo-img">
            Origin
        </a>
        <a href="https://www.epicgames.com/store/en-US/download" target="_blank" class="download-btn">
            <img src="/img/logo/epicgame.png" alt="Epic Games" class="logo-img">
            Epic Games
        </a>
        <a href="https://www.gog.com/launcher" target="_blank" class="download-btn">
            <img src="/img/logo/gog.png" alt="GOG" class="logo-img">
            GOG
        </a>
        <a href="https://store.ubi.com/us/ubisoft-plus/" target="_blank" class="download-btn">
            <img src="/img/logo/uplay.png" alt="Uplay" class="logo-img">
            Uplay
        </a>
        <!-- Ajoutez d'autres launchers ici si nécessaire -->
    </div>

    <p>Choisissez votre launcher préféré et lancez vos jeux en un seul clic !</p>
</main>




<!-- Script pour générer la pluie -->
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
