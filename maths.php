<?php

// PI
echo "" . pi(); // 3.1415926535898

// Minimum and Maximun of 2 numbers
echo "<br />";
echo min(0, 150, 30, 20, -8, -200); // -200
echo "<br />";
echo max(0, 150, 30, 20, -8, -200); // 150

// Absolute value
echo "<br />";

echo (abs(670000)); // 6.7

// Square root
echo "<br />";
echo (sqrt(121));

// Random number
echo "<br />";
echo (rand(0, 9999));

echo "<br />";

$randomNumber = rand(0, 9999);

if ($randomNumber > 0 && $randomNumber < 10) {
    // Append 3 zeros to the random number
    echo "<br />";
    $randomNumber = "000" . $randomNumber;
} else if ($randomNumber > 9 && $randomNumber < 100) {
    // Append 2 zeros to the random number
    echo "<br />";
    $randomNumber = "00" . $randomNumber;
} else if ($randomNumber > 99 && $randomNumber < 1000) {
    // Append 1 zero to the random number
    echo "<br />";
    $randomNumber = "0" . $randomNumber;
}
echo $randomNumber;


// Round a number
echo "<br />";
echo round(7.60); // 8

echo "<br />";
echo round(7.40); // 7

// Power of a number
echo "<br />";
echo pow(2, 3); // 8h