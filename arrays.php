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


// Assigment Solution
$student_scores = array("Bolarinwa" => 12, "Adego" => 15, "Junior" => 36, "Bankole" => 0);


echo "<br />";
foreach ($student_scores as $student_name => $score) {
    echo "$student_name score is $score <br />";
}


echo $student_scores['Bolarinwa'];
echo "<br />";
echo $student_scores['Junior'];

// 7/10/2024
$random_numbers = [1, 4, 78, 90];
echo "<br />";

foreach ($random_numbers as $rand) {
    echo "$rand is a random number from the array <br />";
}


$myCars = ["Audi", "BMW", "Chevolet", "Lexus"];
// Updating array content
echo "<br />";
echo $myCars[2]; // BMW

$myCars[2] = "Ford";
echo "<br />";
echo $myCars[2]; // Ford

$myFavPlaces = array("Mexico", "Miami", "Las Vegas", "Texas", "Ohio");
$myNewFAvPlaces = [];

echo "<br />";
foreach ($myFavPlaces as $place) {
    if ($place == "Texas") {
        array_push($myNewFAvPlaces, $place);
        continue;
    }
    $place = "New York";
    // unset($place);
    array_push($myNewFAvPlaces, $place);
}

echo "<br />";
var_dump($myFavPlaces);
echo "<br />";
var_dump($myNewFAvPlaces);


// Removing array items
$phones = ['Samsung', 'Vivo', "Google Pixel", "iPhone"];
$phone = array_splice($phones, 1, 2);
echo "<br />";
var_dump($phone);
echo "<br />";
var_dump($phones);


// Multi-dimensional Arrays
$student_list = array(
    "Bolarinwa" =>  array("Mathematics" => 100, "Engish Language" => 99, "Physisc" => 98, "Chemistry" => 100),
    "Joseph" => array("Mathematics" => 50, "Engish Language" => 40, "Physisc" => 67, "Chemistry" => 20),
    "Tinuke" => array("Mathematics" => 17, "Engish Language" => 55, "Physisc" => 73, "Chemistry" => 76),
    "Samuel" => array("Mathematics" => 12, "Engish Language" => 9, "Physisc" => 13, "Chemistry" => 100),
    "Afolasewa" => array("Mathematics" => 100, "Engish Language" => 69, "Physisc" => 76, "Chemistry" => 34),
    "ATM" => array("Mathematics" => 95, "Engish Language" => 90, "Physisc" => 98, "Chemistry" => 90)
);

echo "<br />";
// var_dump($student_list);

echo "<br />";

foreach ($student_list as $name => $subject) {
    // echo "$name: <br />";
    foreach ($subject as $title => $score) {
        echo "$name scored $score in $title <br />";
    }
};

$numberss = [
    [0, 1, 2, 3],
    [4, 5, 6, 7],
    [8, 9, 10, 11]
];

echo "<br />";
foreach ($numberss as $number) {
    foreach ($number as $innerNumber) {
        echo $innerNumber . ", ";
    }
}


$test = [1, 2, 3, 4, "Hello"];

var_dump($test);


// Some Arrays Methods

// Fiiling an array with values
$fillableArray = array_fill(0, 10, "Obidients");

echo "<br />";
var_dump($fillableArray);

// Filtering an array
$digits = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$even = array_filter($digits, function ($x) {
    if ($x % 2 == 0) {
        return $x;
    }
});

echo "<br />";
print_r($even);

// Array Keys: To extract the keys in an array
$student_list = array(
    "Bolarinwa" =>  array("Mathematics" => 100, "Engish Language" => 99, "Physisc" => 98, "Chemistry" => 100),
    "Joseph" => array("Mathematics" => 50, "Engish Language" => 40, "Physisc" => 67, "Chemistry" => 20),
    "Tinuke" => array("Mathematics" => 17, "Engish Language" => 55, "Physisc" => 73, "Chemistry" => 76),
    "Samuel" => array("Mathematics" => 12, "Engish Language" => 9, "Physisc" => 13, "Chemistry" => 100),
    "Afolasewa" => array("Mathematics" => 100, "Engish Language" => 69, "Physisc" => 76, "Chemistry" => 34),
    "ATM" => array("Mathematics" => 95, "Engish Language" => 90, "Biology" => 98, "Chemistry" => 90)
);
echo "<br />";
print_r(array_keys($student_list));

echo "<br />";
print_r(array_keys($student_list["ATM"]));


// Array map
echo "<br />";

array_map(function ($student) {
    print_r($student);
    echo "<br />";
}, $student_list);

// Merging arrays
$a = [1, 2, 3, 4];
$b = [5, 6, 7, 8];

$c = array_merge($a, $b);
echo "<br />";
print_r($c);


// Reversing an array
$d = array_reverse($c, true);
echo "<br />";
print_r($d);


// Assigment:

/*
    Create a multi-dimensional associative array that consist of 5 authors using  the Authors full name as keys for the outer array. The values for those keys should be 5 books written by the author and the year it was published.

    Display a well constructed sentence using the array (html format with styling).
    create an array_assignment.php file for this purpose.
    To be submitted on 15/07/2024
*/