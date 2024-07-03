<?php
// Numeric / Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");

echo $cars[0];
echo "<br />";
echo $cars[1];
echo "<br />";
echo $cars[2];
echo "<br />";

// Another way of creating an indexed array (Don't recommend)
$newCars[0] = "Volvo";
$newCars[1] = "BMW";
$newCars[2] = "Toyota";
$newCars[5] = "Mercedes";

var_dump($newCars) . '<br />';
echo $newCars[0];
echo "<br />";
echo $newCars[1];
echo "<br />";
echo $newCars[2];
echo "<br />";
echo $newCars[5];
echo "<br />";


// Third method of creating an indexed array
$thirdCars = ['volvo', 'Honda', 'Audi'];

echo $thirdCars[0];
echo "<br />";
echo $thirdCars[1];
echo "<br />";
echo $thirdCars[2];
echo "<br />";


// Associative Arrays
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo $age["Peter"];
echo "<br />";

echo $age["Joe"];

echo "<br />";
// Another way of creating an associative array
$heights = [
    "Peter" => "5.6",
    "Ben" => "6.0",
    "Joe" => "5.8"
];

// Looping through an associative array!
foreach ($heights as $height) {
    echo $height;
    echo "<br />";
}
foreach ($heights as $person => $height) {
    echo "$person is $height m tall";
    echo "<br />";
}
