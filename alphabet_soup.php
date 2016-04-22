<?php

function soupify($string) {
    $newArray = [];
    $stringAsArray = explode(" ", $string);
    foreach ($stringAsArray as $word) {
        $word = str_split($word);
        sort($word);
        $word = implode("", $word);
        array_push($newArray, $word);
    }
    $souped = implode(" ", $newArray);
    return $string . " is " . $souped.PHP_EOL;
}
echo soupify("alpahbet soup");





// Create a function alphabet_soup($str) that accepts a string and will return the string in alphabetical order. E.g. "hello world" becomes "ehllo dlorw". So make sure your function separates and alphabetizes each word separately.