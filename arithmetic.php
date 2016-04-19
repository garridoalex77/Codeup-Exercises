<?php

function add($a, $b)
{
    return $a + $b;
}
function subtract($a, $b)
{
    return $a - $b;
}
function multiply($a, $b)
{
   return $a * $b;
}
function divide($a, $b)
{
    return $a / $b;
}
function modulus($a, $b)
{
    return $a % $b;
}
// Add code to test your functions here
echo add(42, 21).PHP_EOL;
echo subtract(65, 33).PHP_EOL;
echo divide(99, 33).PHP_EOL;
echo multiply(55, 5).PHP_EOL;
echo modulus(55, 7).PHP_EOL;
