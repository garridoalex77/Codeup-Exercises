<?php
echo "Choose a starting Number: ";
$index = intval(fgets(STDIN));
echo "Choose a number to end on: ";
$end = intval(fgets(STDIN));
echo "Choose how much to increment by: ";
$increment = intval(fgets(STDIN));
if (!is_null($index) || !is_null($end) || !is_null($increment)) {
    for ($index; $index <= $end; $index+=$increment) { 
        echo $index.PHP_EOL;
    }
    
}