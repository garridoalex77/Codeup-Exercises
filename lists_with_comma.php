 <?php
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 // TODO: Convert the string into an array
 $physicistsArray = [];


 function humanizedList($string, $sort = false) {
    $list = explode(', ', $string);
    If ($sort) {
        sort($list);
    }
    var_dump($list);
    $last = array_pop($list);
    $list = implode(", ", $list);
    return $list . ' and ' . $last;
 }

 $famousFakePhysicists = humanizedList($physicistsString, true);



 // Output sentence
 echo "\nSome of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

 ?>