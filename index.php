<?php
interface VideoInterface {
    public function getName(): string;
    public function getSource(): string;
    public function getEmbedCode(): string;
}


abstract class Video implements VideoInterface
{
    protected $name;
    protected $source;

    public function __construct($name, $source)
    {
        $this->name = $name;
$this->source = $source;
}

public function getName(): string
{
return $this->name;
}

public function getSource(): string
{
return $this->source;
}

abstract public function getEmbedCode(): string;
}

class YouTubeVideo extends Video {
    private $videoId;

    public function __construct($name, $videoId) {
        parent::__construct($name, 'YouTube');
        $this->videoId = $videoId;
    }

    public function getEmbedCode(): string {
        return '<iframe src="https://www.youtube.com/embed/' . $this->videoId . '" allowfullscreen></iframe>';
    }
}

$videos = [
    new YouTubeVideo("Video 1", "4aj5cRgJcCY"),
    new YouTubeVideo("Video 2", "4aj5cRgJcCY"),
    new YouTubeVideo("Video 3", "4aj5cRgJcCY"),
    new YouTubeVideo("Video 4", "4aj5cRgJcCY"),
    new YouTubeVideo("Video 5", "4aj5cRgJcCY")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gallery</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<h1>YouTube Video Gallery</h1>
<div class="container">
    <?php foreach ($videos as $video): ?>
        <div class="video">
            <div class="title"><?php echo $video->getName(); ?></div>
            <?php echo $video->getEmbedCode(); ?>
            <div class="origin"><?php echo $video->getSource(); ?></div>
        </div>
    <?php endforeach; ?>
</div>

</body>

</html>