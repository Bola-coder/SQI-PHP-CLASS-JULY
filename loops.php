<?php
echo "Hello loops here I come!!!";

echo "<br />";

// While loop

$count = 11;
while ($count <= 10) {
    echo "Count is: $count <br />";
    $count++;
}

// echo "Using Breaks in while loop";
// echo "<br />";



// $count = 1;

// while ($count <= 1000000000000000000) {
//     if ($count > 5) {
//         break;
//     }
//     echo "Count is: $count <br />";
//     $count++;
// }


// echo "Using Continue in while loop";
// echo "<br />";


// $count = 1;

// while ($count <= 10) {
//     if ($count % 2 != 0) {
//         $count++;
//         continue;
//     }
//     echo "Count is: $count <br />";
//     $count++;
// }


// // For loop
// $count = 1;
// $limit = 20;
// echo "Using For Loops";
// echo "<br />";

// for ($count = 1; $count <= $limit; $count++) {
//     if ($count % 10 == 0) {
//         echo "yayyy we are at $count <br />";
//     } else {
//         echo "Count is: $count <br />";
//     }
// }

// echo "Using Breaks in for loop";
// echo "<br />";

// for ($count = 1; $count <= $limit; $count++) {
//     if ($count > 5) {
//         break;
//     }
//     echo "Count is: $count <br />";
// }

// echo "Using Continue in for loop";
// echo "<br />";

// for ($count = 1; $count <= $limit; $count++) {
//     if ($count % 2 == 0) {
//         echo "$count is an even number number so Nayyyy <br />";
//         continue;
//     }
//     echo "Count is: $count <br />";
// }

// // Do While Loop
// echo "Using Do While Loops";
// echo "<br />";

$count = 11;
$limit = 10;

// do {
//     echo "Count is $count <br />";
//     $count++;
// } while ($count <= $limit);



// Using Indentations in a for loop
// for ($count = 1; $count <= 10; $count++) :
//     echo "Count is $count <br />";
// endfor;


//Nagative loops
// for ($count = 10; $count >= 1; $count--) {
//     echo "Count is $count <br />";
// }

for ($count = 2; $count <= 20; $count += 2) {
    echo "Count is $count <br />";
}

// Looping through an array
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $car) {
    echo "I love $car <br />";
}




// Scenario of a game using while loop and flags
// Lives 3
// 
// const isAlive = true // flag;

// while (isAlive) {
    // Play game
    // if dem shoot you
    // live -= 1

    // if(live == 0){
    //     isAlive = false
    // }
// }