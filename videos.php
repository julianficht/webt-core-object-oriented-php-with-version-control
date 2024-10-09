<?php

require_once 'YouTubeVideo.php';
require_once 'VimeoVideo.php';

// Erstelle eine Liste von Video-Objekten
$videos = [
    new YouTubeVideo("YouTube Video 1", "dQw4w9WgXcQ"),
    new YouTubeVideo("YouTube Video 2", "3JZ_D3ELwOQ"),
    new VimeoVideo("Vimeo Video 1", "76979871"),
    new VimeoVideo("Vimeo Video 2", "22439234"),
    new VimeoVideo("Vimeo Video 3", "12345678"),
    // Füge mehr Videos hinzu, um insgesamt 20 zu erreichen
];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailer Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .video-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .video-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(25% - 20px);
        }
        iframe {
            width: 100%;
            height: 200px;
            border: none;
        }
    </style>
</head>
<body>

    <h1>Trailer Portal</h1>
    <div class="video-container">
        <?php foreach ($videos as $video): ?>
            <div class="video-item">
                <h2><?php echo htmlspecialchars($video->getName()); ?></h2>
                <p>Quelle: <?php echo htmlspecialchars($video->getSource()); ?></p>
                <?php echo $video->getEmbedHtml(); ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
