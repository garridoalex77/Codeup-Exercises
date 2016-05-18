<?php

class Rectangle {
    public $height;
    public $width;

    public function __construct($height, $width) 
    {
        $this->setHeight($height);
        $this->setWidth($width);

    }

    protected function setHeight($height) 
    {
        $this->height = $height;
    }
    
    protected function setWidth($width) 
    {
        $this->width = $width;
    }
    
    protected function getHeight() 
    {
        return $this->height;
    }
    
    protected function getWidth() 
    {
        return $this->width;
    }


    public function perimeter() 
    {
        return "Rectangle: " . $this->getHeight() * 4;
    }

    public function area() 
    {
        return "Rectangle: " . $this->getHeight() * $this->getWidth();
    }
}