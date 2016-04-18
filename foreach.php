<?php 
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
    if (is_int($value)) {
        echo "{$value} is int\n";
    } elseif (is_bool($value)) {
        echo "{$value} is bool\n";
    } elseif (is_array($value)) {
        echo print_r($value) . "is array\n";
    } elseif (is_string($value)) {
        echo "{$value} is string\n";
    } elseif (is_float($value)) {
        echo "{$value} is float\n";
    } elseif (is_null($value)) {
        echo "{$value} is null\n";
    }
}