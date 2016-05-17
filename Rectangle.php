<?php

class Rectangle {
    private $height;
    private $width;

    public function __construct($height, $width) 
    {
        $this->setHeight($height);
        $this->setWidth($width);

    }

    private function setHeight($height) 
    {
        $this->height = trim($height);
    }
    
    private function setWidth($width) 
    {
        $this->width = trim($width);
    }
    
    public function getHeight() 
    {
        return $this->height;
    }
    
    public function getWidth() 
    {
        return $this->width;
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