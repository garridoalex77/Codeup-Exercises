<?php
require_once "Log.php";

$test = new Log('cli');
$test->logInfo("This is an info message.");
$test->logError("This is an info message.");
// var_dump($test);
