<?php

interface VideoInterface {
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}

abstract class AbstractVideo implements VideoInterface {
    protected string $name;
    protected string $source;

    public function __construct(string $name, string $source) {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSource(): string {
    return $this->source;
    }

    abstract public function getEmbedCode(): string;
}
#ich bin ein versager!!
class YouTubeVideo extends AbstractVideo {
    private string $videoId;

    public function __construct(string $name, string $videoId) {
        parent::__construct($name, 'YouTube');
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->videoId . '" allowfullscreen></iframe>';
    }
}

class VimeoVideo extends AbstractVideo {
    private string $videoId;

    public function __construct(string $name, string $videoId) {
        parent::__construct($name, 'Vimeo');
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe src="https://player.vimeo.com/video/' . $this->videoId . '" width="560" height="315" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
    }
}

$videos = [
    new YouTubeVideo("Video 1", "4bHUsy74Fss"),
    new YouTubeVideo("Video 2", "4bHUsy74Fss"),
    new YouTubeVideo("Video 3", "4bHUsy74Fss"),
    new YouTubeVideo("Video 4", "4bHUsy74Fss"),
    new YouTubeVideo("Video 5", "4bHUsy74Fss"),
    new YouTubeVideo("Video 6", "4bHUsy74Fss"),
    new VimeoVideo("Vimeo Video 1", "76979871"),
    new VimeoVideo("Vimeo Video 2", "76979871"),
    new VimeoVideo("Vimeo Video 3", "76979871"),
    new VimeoVideo("Vimeo Video 4", "76979871"),
    new VimeoVideo("Vimeo Video 5", "76979871"),
    new VimeoVideo("Vimeo Video 6", "76979871")
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>YouTube Video Gallery</title>
</head>
<body>

    <h1 class="headline">YouTube Video Gallery</h1>

    <div class="gallery-container">
        <?php foreach ($videos as $video): ?>
            <div class="video">
                <h2>Title: <?= $video->getName(); ?></h2>
                <p>Origin: <?= $video->getSource(); ?></p>
                <?= $video->getEmbedCode(); ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>