<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Bob'];

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
    $newArray = [];

    if (count($array1) > count($array2)) {
        $bigArray = $array1;
        $smallArray = $array2;
    } else {
        $bigArray = $array2;
        $smallArray = $array1;
    }

    foreach ($bigArray as $key => $value) {
        if (array_key_exists($key, $smallArray)) {
            array_push($newArray, $smallArray[$key]);
        }
        if (!(search($value, $smallArray))) {
            array_push($newArray, $value);
        }
    }
    return $newArray;
}
$result = combineArrays($names, $compare);

print_r($result);
// echo "Search for Tina results " . search('Tina', $names).PHP_EOL;
// echo "Search for Bob results " . search('Bob', $names).PHP_EOL;
// echo compareArrays($names, $compare);
