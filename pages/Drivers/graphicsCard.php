<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Carte Graphique</title>
</head>
<body>

<div class="rain"></div>
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
                <li><a href="#">Discussion</a></li>
                <li><a href="/pages/retroGaming.php">Retro Gaming</a></li>
            </ul>
            <form action="/php-login-system/src/Index.php" method="POST" style="display: inline;">
    <button type="submit" class="logout-btn">Déconnexion</button>
</form>
        </nav>
    </header>

       
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