<?php

class iphone
{
    private $color;
    private $storage;

    public function __construct($color, $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getStorage()
    {
        return $this->storage;
    }
}