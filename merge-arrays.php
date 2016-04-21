<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search ($findName, $array) {
    if (array_search($findName, $array) !== false) {
        return True;
    } else {
        return False;
    }
    
}

function compareArrays($array1, $array2) {
    $i = 0;
    foreach ($array1 as $value) {
        if (search($value, $array2)) {
            $i++;
        }
    }
        return $i." Similar items".PHP_EOL;
}

function combineArrays($array1, $array2) {
    foreach ($array1 as $value) {
        if (!(search($value, $array2))) {
            array_push($array1, $value);
            array_pop($array2);
        }
    }
            return $array1;
}
$result = combineArrays($names, $compare);

print_r($result);
// print_r($compare);

// echo "Search for Tina results " . search('Tina', $names).PHP_EOL;
// echo "Search for Bob results " . search('Bob', $names).PHP_EOL;
// echo compareArrays($names, $compare);
