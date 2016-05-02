<?php 
class Log 
{
    public $fileName;
    public $handle;
    public $prefix;
    public function __construct($prefix = "log") 
    {
       $this->prefix = $prefix;
    }

    public function logMessage($logLevel, $message) 
    {
        date_default_timezone_set("UTC");
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $this->fileName = $this->prefix."-{$date}.log";
        $handle = fopen($this->fileName, "a");
        fwrite($handle, "{$date} {$time} {$logLevel} {$message}\n");
        fclose($handle);
    }

    public function logInfo($message) 
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message) 
    {
        $this->logMessage("ERROR", $message);
    }

    public function __destruct() 
    {

    }
}