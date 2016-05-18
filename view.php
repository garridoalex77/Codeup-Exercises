<?php
require_once 'Model.php';

$model = new Model();
$model->name = 'alex';
$model->group = 'codeup';
$model->age = 99;
echo $model->age.PHP_EOL;