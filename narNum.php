<?php
// $allNarns = [];
// $base = 0;
// do {
//     $check = 0;
//     $baseLength = strlen((string)$base);
//     foreach (str_split((string)$base) as $number) {
//         $check += pow($number, $baseLength);
//     }
//     if ($base == $check) {
//         $allNarns[] = $base;
//     }
//     $base++;
// } while (count($allNarns) < 25);
// print_r($allNarns);

$allNarns = [];
for ($base=0; count($allNarns) < 25; $base++) {
    $check = 0;
    foreach (str_split($base) as $number) {
        $check += pow($number, strlen((string)$base));
    }
    if ($check == $base) {
        $allNarns[] = $base;
    }
}
print_r($allNarns);
