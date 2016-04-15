<?php
start:
$bottles = 99;
while ($bottles > 0) {
    sleep(1);
    echo "{$bottles} ".$amount." of beer on the wall\n";
    $amount = ($bottles == 2 || $bottles == 0) ? "bottle" : "bottles";
    $bottles--;
    echo "take one down pass it around {$bottles} " .$amount." of beer on the wall\n";

}
echo "No more bottles of beer on the wall time to go to the store\n";
goto start;