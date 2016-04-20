<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

if (array_search('Bob', $names) !== false) {
    echo "True\n";
} else {
    echo "False\n";
}

if (array_search('Tina', $names) !== false) {
    echo "True\n";
} else {
    echo "False\n";
}