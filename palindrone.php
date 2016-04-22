<?php

function palindrone($word) {
    $newWord = str_replace(" ", "", $word);
    if ($newWord == strrev($newWord)) {
        return "{$word} is a palindrone\n";
    } else 
    return "{$word} is NOT a palindrone\n";
}

echo palindrone('a man a plan a canal panama').PHP_EOL;
echo palindrone('racecar').PHP_EOL;
echo palindrone('banana').PHP_EOL;
