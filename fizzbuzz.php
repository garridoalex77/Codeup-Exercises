<?php 

for ($i = 1; $i <= 100 ; $i++) {
    $x = ""; 
    if ($i % 3 == 0) {
        $x = "Fizz";
    }
    if ($i % 5 == 0) {
        $x .= "Buzz";
    }
    if ($x == "") {
        echo $i.PHP_EOL;
    } else {
        echo $x.PHP_EOL; 
    }
}
