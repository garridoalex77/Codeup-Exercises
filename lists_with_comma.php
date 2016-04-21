 <?php
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 // TODO: Convert the string into an array
 $physicistsArray = [];


 function humanizedList($list, $string) {
    $list = explode(' ', $string);
    $lastSur = array_pop($list);
    $lastFore = array_pop($list);
    array_push($list, "and");
    array_push($list, $lastFore);
    array_push($list, $lastSur);
    $list = implode(" ", $list);
    return $list;
 }

 $famousFakePhysicists = humanizedList($physicistsArray, $physicistsString);



 // Output sentence
 echo "\nSome of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

 ?>