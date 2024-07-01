<?php

// if statement
$age = 20;
// if ($age > 18) {
//     echo "You are an adult";
// } else {
//     echo "You are not yet an adult";
// }


// Indentation methods
if ($age > 12) :
    echo "You are a teenager";
    echo "Common you big guy";
elseif ($age > 18) :
    echo "You are an adult";
else :
    echo "You are not yet an adult";
endif;
