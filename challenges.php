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

// echo sum(12);


//program to convert a given number to words 1234 = one thousand three hundred and thirty 4
// ASK LUIS
// function sayANumber($number) {
//     $numWord = "";
// }

// echo sayANumber (1234);

//count the digit 0 in a list of numbers

function countZero ($number) {
    $zeros = 0;
    $numArray = [];
    for ($i = 1; $i <= $number ; $i++) { 
        $list = str_split($i);
        foreach ($list as $digit) {
            var_dump($digit);
            if ($digit == 0) {
                array_push($numArray, $i);
            }
        }
    }
    var_dump($numArray);

}

echo countZero(107);