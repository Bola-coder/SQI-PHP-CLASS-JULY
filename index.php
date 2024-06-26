<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My FIrst Php Class</title>
</head>

<body>
    <h2>Welcome to Php</h2>
    <?php echo "Welcome to Php Yayy!"; ?>
    <?php print "Hello world"; ?>
</body>

</html>

<?php
echo "Hello World" . "<br />";
// echo phpversion();

/* This is a comment */

// Variables
$name = "John Douglas";
$age = 12;
$_status = true;
// var_dump($name);
// echo "Welcome " . $name . "  " . "We are very pleased to have ypu here..." . "<br />";

$name = 456;
// var_dump($name);

// echo "Welcome " . $name . "  " . "We are very pleased to have ypu here..." . "<br />";


// echo "You are " . $age . " years old" . "<br />";

// echo $_status;

function sayAge()
{
    global $age;
    echo "You are $age years old" . "<br />";
}

sayAge();


// Static functions
function incrementOnEveryCall()
{
    static $count = 0;
    $count++;
    echo $count . "<br />";
}

incrementOnEveryCall();
incrementOnEveryCall();
incrementOnEveryCall();
incrementOnEveryCall();
incrementOnEveryCall();
incrementOnEveryCall();
?>