<?php

// Array Refresher
// Indexed Arrays
// $cars = array("Volvo", "BMW", "Toyota");
$cars = ["Volvo", "BMW", "Toyota"];

echo $cars[0];
echo "<br>";
echo $cars[1];
echo "<br>";
echo $cars[2];
echo "<br>";

// Associative Arrays
$ages = ["Peter" => 35, "Ben" => 70, "Joe" => 43];
$temp_ages = [35, 70, 43];

var_dump($ages);
echo "<br>";
echo $ages['Peter']; // 35
echo "<br>";
echo $ages['Ben']; // 70
echo "<br>";
var_dump($temp_ages);


// Looping through arrays in php
// Indexed Arrays
echo "<br>";
$studentHeights = [5.6, 5.7, 5.8, 5.9, 6.0, 4.5, 6.7];
echo count($studentHeights);
echo "<br>";

echo "Student heights listed below";
echo "<br>";

for ($i = 0; $i < count($studentHeights); $i++) {
    echo "Student " .  $i + 1 . "'s height is  $studentHeights[$i]";
    echo "<br>";
}

// foreach method
echo "Student heights listed below";
echo "<br>";
foreach ($studentHeights as $height) {
    echo "Student height is $height";
    echo "<br>";
}

// Lloping through associative arrays
echo "<br>";
$studentScores = ["Bolarinwa" => 99, "Ara" => 75, "ATM" => 80, "Ben" => 98];
foreach ($studentScores as $studentName => $studentScore) {
    echo "$studentName score is $studentScore <br />";
}
