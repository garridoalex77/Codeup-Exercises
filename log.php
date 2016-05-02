<?php 
class Log {
    public function logMessage($logLevel, $message) {
        date_default_timezone_set("UTC");
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $fileName = "log-{$date}.log";
        $handle = fopen($fileName, "a");
        fwrite($handle, "{$date} {$time} {$logLevel} {$message}\n");
        fclose($handle);
    }
    public function logInfo($message){
        $this->logMessage("INFO", $message);
    }
    public function logError($message){
        $this->logMessage("ERROR", $message);
    }
}