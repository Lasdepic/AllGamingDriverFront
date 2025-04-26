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
    <h1>Carte Graphique</h1>
    <p>Bienvenue sur la page des pilotes de carte graphique !</p>
    <p>Téléchargez les derniers pilotes pour votre carte graphique ici :</p>

    <div class="download-links">
        <a href="https://www.nvidia.com/Download/index.aspx" target="_blank" class="download-btn">
            <img src="/img/logo/NVIDIA.png" alt="NVIDIA Logo" class="logo-img"> 
            NVIDIA
        </a>
        <a href="https://www.amd.com/en/support" target="_blank" class="download-btn">
            <img src="/img/logo/AMD_BIG.png" alt="AMD Logo" class="logo-img">
            AMD
        </a>
        <a href="https://downloadcenter.intel.com/" target="_blank" class="download-btn">
            <img src="/img/logo/intel.png" alt="Intel Logo" class="logo-img">
            Intel
        </a>
    </div>

    <p>Assurez-vous de choisir le bon modèle avant de télécharger votre pilote.</p>
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
