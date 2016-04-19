<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "Error both arguments must be numbers, value \$a : {$a}, \$b : {$b}";
    }
}
function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "Error both arguments must be numbers, value \$a : {$a}, \$b : {$b}";
    }
}
function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "Error both arguments must be numbers, value \$a : {$a}, \$b : {$b}";
    }
}
function divide($a, $b)
{
    if ($b == 0) {
        return "don't divide by 0, value \$a : {$a}, \$b : {$b}";
    } elseif (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        return "Error both arguments must be numbers, value \$a : {$a}, \$b : {$b}";
    }
}
function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "Error both arguments must be numbers, value \$a : {$a}, \$b : {$b}";
    }
}
// Add code to test your functions here
echo add('dog', 21).PHP_EOL;
echo subtract(65, 33).PHP_EOL;
echo multiply(3, 3).PHP_EOL;
echo divide(99, 0).PHP_EOL;
echo modulus(55, 7).PHP_EOL;
