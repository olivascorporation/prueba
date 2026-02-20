<?php
// Datos del compa
$nombre = "Aleksander Figueroa";
$tagline = "Actor de doblaje 🎧 | Voz con carácter y pasión";
$bio = "En constante formación, grabando desde cabina tratada para ofrecer calidad profesional.";
$precio_nota = "Precio negociable 🤝";

$redes = [
    ['name' => 'TikTok (Alivox Studio)', 'url' => 'https://www.tiktok.com/@alivoxstudio', 'icon' => 'tiktok'],
    ['name' => 'Instagram', 'url' => 'https://www.instagram.com/alek_figueroa', 'icon' => 'instagram']
];

$demos = [
    ['titulo' => 'Reel Comercial', 'url' => 'https://drive.google.com/drive/folders/1091drCgLVFgJI6wtn4a8zCkSAM35hqfz'],
    ['titulo' => 'Personajes / Doblaje', 'url' => 'https://drive.google.com/drive/folders/1H0tC98XUw1bC2awvv9YpaNuKYiWDPbvZ']
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre; ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="poro-container">
        <img src="https://raw.githubusercontent.com/Khada Jhin/Poro-Assets/master/poro.png" alt="Poro" class="poro-gif">
        <div class="poro-speech">¡Hola! El precio es negociable</div>
    </div>

    <div class="main-card">
        <header>
            <div class="avatar"></div>
            <h1><?php echo $nombre; ?></h1>
            <p class="tagline"><?php echo $tagline; ?></p>
            <p class="bio"><?php echo $bio; ?></p>
            <span class="price-badge"><?php echo $precio_nota; ?></span>
        </header>

        <section class="links-section">
            <?php foreach($redes as $red): ?>
                <a href="<?php echo $red['url']; ?>" class="link-btn" target="_blank">
                    <i class="fab fa-<?php echo $red['icon']; ?>"></i> <?php echo $red['name']; ?>
                </a>
            <?php endforeach; ?>
        </section>

        <section class="demos-section">
            <h3>🎙️ Escucha mi trabajo</h3>
            <div class="demo-grid">
                <?php foreach($demos as $demo): ?>
                    <a href="<?php echo $demo['url']; ?>" class="demo-card" target="_blank">
                        <i class="fas fa-play-circle"></i>
                        <p><?php echo $demo['titulo']; ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <footer>
            <p>© <?php echo date("Y"); ?> | <span class="brand">Olivas Corporation</span></p>
        </footer>
    </div>

</body>
</html>
