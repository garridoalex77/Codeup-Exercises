<?php
class Log
{
    public $fileName;
    public $handle;
    public $date;
    public function __construct($prefix = "log")
    {
        date_default_timezone_set("UTC");
        $this->date = date('Y-m-d');
        $this->fileName = $prefix."-{$this->date}.log";
        $this->handle = fopen($this->fileName, "a");
    }

    public function logMessage($logLevel, $message)
    {
        $time = date('h:i:s');
        fwrite($this->handle, "{$this->date} {$time} {$logLevel} {$message}\n");
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
        fclose($this->handle);
    }
}

class File
{
    public $handle;

    public function __construct($fileName)
    {
        $this->handle = fopen($fileName, "a");
    }
    public function append($text) {
        fwrite($this->handle, "{$text}\n");
    }
    public function close() {
        fclose($this->handle);
    }

}
