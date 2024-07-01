<?php
$numbOne = 500; // Integer
$numbTwo = "600"; // Number String
$numbThree = 3.05; // floating point number
$numbFour = null;
// echo $numbOne . "<br />";
var_dump($numbOne);

echo "<br />";
var_dump($numbTwo);

echo "<br />";
var_dump($numbThree);

$sum = $numbOne + $numbTwo;
$sumTwo = $numbTwo + $numbOne;
$sumThree = $numbTwo + $numbThree;

echo "<br />";
echo $sum;
echo "<br />";

echo $sumTwo;
echo "<br />";

echo $sumThree;
echo "<br />";
var_dump($sumTwo);


$sumThree = (int) $sumThree;
$sumTwo = (float) $sumTwo;

var_dump($sumThree);
var_dump($sumTwo);

$floatNumber = 3.742;
$intNumber = (int) $floatNumber; // Explicit type casting to convert from float to integer

echo "<br />";
echo $floatNumber . " - " . $intNumber;


echo "<br />";
echo "The maximun integer value in php is " . PHP_INT_MAX;

echo "<br />";
echo "The minimum integer value in php is " . PHP_INT_MIN;


echo "<br />";
echo "The size of an integer value in php is " . PHP_INT_SIZE . " BYTES";

echo "<br />";

if (is_integer($numbOne)) {
    echo "$numbOne is an integer";
} else {
    echo "$numbOne is not an integer";
}


// Floating point numbers

echo "<br />";
echo "The maximun FLOAT value in php is " . PHP_FLOAT_MAX;

echo "<br />";
echo "The minimum FLOAT value in php is " . PHP_FLOAT_MIN;


echo "<br />";
// echo "The size of an integer value in php is " . PHP_FLOAT_SIZE . " BYTES";

if (is_float($numbThree)) {
    echo "$numbThree is an floating point number";
} else {
    echo "$numbThree is not an floating point number";
}


// Checking for NaN
echo "<br />";
$x = acos(8);
echo $x;
var_dump($x);


// check for numerical strings
if (is_numeric($numbTwo)) {
    echo "<br />";
    echo "$numbTwo is a number";
} else {
    echo "<br />";
    echo "$numbTwo is not a number";
}
