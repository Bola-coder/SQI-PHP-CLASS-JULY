<?php
echo pi();

// define("PI", 3.142); // defining a constant
const PI = 3.142; // defining a constant
echo "<br />";
echo PI;


$radius = 5;

echo "<br />";
echo "The area of a circle with radius $radius is " . PI * pow($radius, 2);


// COnstants are global
define("GREETING", "Welcome to W3Schools.com!");

function myTest()
{
    echo GREETING;
}

myTest();
