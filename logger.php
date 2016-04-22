<?php

function logMessage($logLevel, $message) {
    $date = date("Y-m-d");
    $time = date('h:i:s');
    $fileName = "log-{$date}.log";
    
    $handle = fopen($fileName, "a");
    fwrite($handle, "{$date} {$time} {$logLevel} {$message}\n");
}
logInfo("This is an info message.");
logError("This is an info message.");

function logInfo($message){
    logMessage("INFO", $message);
}
function logError($message){
    logMessage("ERROR", $message);
}