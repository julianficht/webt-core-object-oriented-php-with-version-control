<?php

require_once 'AbstractVideo.php';

class VimeoVideo extends AbstractVideo
{
    private $videoId;

    public function __construct(string $name, string $videoId)
    {
        parent::__construct($name, 'Vimeo');
        $this->videoId = $videoId;
    }

    public function getEmbedHtml(): string
    {
        return '<iframe src="https://player.vimeo.com/video/' . $this->videoId . '" width="560" height="315" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
    }
}
