<?php
require_once "Log.php";

// $test = new Log('cli');
// $test->logInfo("This is an info message.");
// $test->logError("This is an info message.");

$file = new File('file.txt');
$file->append("Hello joshua");
$file->close();