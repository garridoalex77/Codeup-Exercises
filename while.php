<?php

// $test = 5;
// while($test <= 15) {
//     echo "{$test}\n";
//     $test++;
// }

$bottles = 99;
while ($bottles > 0) {
    echo "{$bottles} " . $amount . " of beer on the wall\n";
    $amount = ($bottles == 2 || $bottles == 0) ? "bottle" : "bottles";
    $bottles--;
    echo "take one down pass it around {$bottles} " . $amount . " of beer on the wall\n";   
}