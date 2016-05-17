<?php

class Rectangle {
    private $height;
    private $width;

    public function getHeight() 
    {
        return $this->height;
    }
    public function getWidth() 
    {
        return $this->width;
    }

    public function __construct($height, $width) 
    {
        $this->height = $height;
        $this->width = $width;

    }

    public function perimeter() 
    {
        return "Rectangle: " . $this->height * 4;
    }

    public function area() 
    {
        return "Rectangle: " . $this->height * $this->width;
    }
}