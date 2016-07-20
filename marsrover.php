<?php 
fwrite(STDOUT, "Please enter: Upper Right Coordinates.\n");
$gridMax = trim(fgets(STDIN));
fwrite(STDOUT, "Please enter: Rover 1 position.\n");
$rover1Pos = trim(fgets(STDIN));    
fwrite(STDOUT, "Please enter: Rover 1 instructions.\n");
$rover1Do = trim(fgets(STDIN));    
fwrite(STDOUT, "Please enter: Rover 2 position.\n");
$rover2Pos = trim(fgets(STDIN));    
fwrite(STDOUT, "Please enter: Rover 2 instructions.\n");
$rover2Do = trim(fgets(STDIN));


$gridMax = explode(" ", $gridMax);
$rover1Pos = explode(" ", $rover1Pos);
$rover2Pos = explode(" ", $rover2Pos);
$rover1Do = str_split($rover1Do);
$rover2Do = str_split($rover2Do);

function doIMove(&$roverPos, $gridMax, $move) {
    if ($roverPos < $gridMax) {
        $roverPos += $move;
        if ($roverPos == -1)
            $roverPos = 0;
        } 
}

function moveRover($roverPos, $roverDo, $gridMax) {
    $directions = ['N', 'E', 'S', 'W'];
    foreach ($roverDo as $key => $letter) {
        //change direction facing
        $dirKey = array_search($roverPos[2], $directions);
        switch ($letter) {
            case 'L':
                if (!array_key_exists($dirKey - 1, $directions)) {
                    $dirKey = 4;
                }
                $roverPos[2] = $directions[$dirKey - 1];
                break;
            case 'R':
                if (!array_key_exists($dirKey + 1, $directions)) {
                    $dirKey = -1;
                }
                $roverPos[2] = $directions[$dirKey + 1];
                break;
            //move in direction facing
            case 'M':
                switch ($roverPos[2]) {
                    case 'N':
                        doIMove($roverPos[1], $gridMax[1], 1);
                        break;
                    case 'S':
                        doIMove($roverPos[1], $gridMax[1], -1);
                        break;
                    case 'E':
                        doIMove($roverPos[0], $gridMax[0], 1);
                        break;
                    case 'W':
                        doIMove($roverPos[0], $gridMax[0], -1);
                        break;
                }
        }
    }
    return $roverPos = implode(" ", $roverPos);
}

$rover1Pos = moveRover($rover1Pos, $rover1Do, $gridMax);
$rover2Pos = moveRover($rover2Pos, $rover2Do, $gridMax);
fwrite(STDOUT, " Current Rover Positions-- \n Rover 1: $rover1Pos\n Rover 2: $rover2Pos\n ");
