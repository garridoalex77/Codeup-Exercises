<?php 
//perfect square
function perfectSquare($a, $b) {
    $perfect =
    $count = 0;
    for ($i = $a; $i <= $b ; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            $perfect .= $i.PHP_EOL;
            $count++;
        }
    }
    return "amount of perfect squares in given range {$count}, Perfect Squares: \n{$perfect}";
}

// echo perfectSquare(9, 100);



//Sum of all digits in number 1 to n
function sum($n) {
    $sumOfAll = 0;
    for ($i = 1; $i <= $n; $i++) {
        $list = str_split($i);      
        foreach ($list as $digit) {
            $sumOfAll += $digit;
        }
    }
    return $sumOfAll.PHP_EOL;
}

echo sum(12);


//program to convert a given number to words 1234 = one thousand three hundred and thirty 4
// ASK LUIS
// function sayANumber($number) {
//     $numWord = "";
// }

// echo sayANumber (1234);
