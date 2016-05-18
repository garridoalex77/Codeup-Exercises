<?php

class Square extends Rectangle {

    public function __construct($height) 
    {
        parent::__construct($height, $height);
    }

    public function perimeter() 
    {   
        return "square: " . parent::getHeight() * 4;
    }

    public function area() 
    {
        
        return "square: " . parent::getHeight() * parent::getWidth();
    }
}