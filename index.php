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

<h1>Video Gallery</h1>
<div class="container">
    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

    <div class="video">
        <div class="title">Title</div>
        <iframe src="https://www.youtube.com/embed/4aj5cRgJcCY" allowfullscreen></iframe>
        <div class="origin">YouTube</div>
    </div>

</div>

</body>

</html>