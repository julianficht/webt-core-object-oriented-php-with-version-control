<?php

abstract class AbstractVideo implements VideoInterface
{
    protected $name;
    protected $source;

    public function __construct(string $name, string $source)
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

    abstract public function getEmbedHtml(): string;
}
