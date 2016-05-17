<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(4, 5);
$square = new Square(3);
echo "the area is " . $rectangle->area().PHP_EOL;
echo "the perimeter is " . $rectangle->perimeter().PHP_EOL;

echo "the area is " . $square->area().PHP_EOL;
echo "the perimeter is " . $square->perimeter().PHP_EOL;