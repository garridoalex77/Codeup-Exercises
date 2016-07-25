<?php

function revMe($string) {
    $strArr = str_split($string);
    $reversed = [];
    foreach ($strArr as $letter) {
        array_unshift($reversed, $letter);
    }
    $reversed = implode("", $reversed);
    return $reversed;
}

echo revMe("dinosaur").PHP_EOL;
