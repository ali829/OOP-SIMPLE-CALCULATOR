<?php
declare(strict_types=1);
include "autoloader.inc.php";


// ? getting data from the form
$operator = $_POST['operator'];
$num1 = (int) $_POST['fnum1'];
$num2 = (int) $_POST['fnum2'];

$calc = new calculator;

echo $calc->calculate($num1, $num2, $operator);