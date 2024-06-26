<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>

<body>
    <h1>Learning Php strings</h1>
</body>

</html>

<?php
$name = "Bolarinwa Ahmed";
$sentence = 'My name is ' . $name . ' and I love reading books';

// String methods

// Getting the length of a string
$nameLength = strlen($name);
$sentenceLength = strlen($sentence);

echo $sentence . "<br />";


// Get the number of words in a string
$nameCount = str_word_count($name);
$sentenceCount = str_word_count($sentence);

echo "<br/> The lenght of $name is $nameLength and the length of the sentence \"$sentence\" is $sentenceLength <br />";

echo $nameCount . " " . $sentenceCount . "<br />";

// Search for a text within a string
$surnmame = strpos($name, "Ahmd");

echo $surnmame . "<br />";

// Convert a string into an array
$sentenceSplit = str_split($sentence, 4);

$sentenceSplitByWords = explode(" ", $sentence);

// echo $sentenceSplit;
print_r($sentenceSplit);

echo "<br />";
print_r($sentenceSplitByWords);



// Converts an array back to a string
$newSentence = join(" ", $sentenceSplitByWords);

// echo $sentenceSplit;
print_r($newSentence);

echo "<br />";


/* --------------------------------------------------------- */
// Modifying Strings
$statement = "My name is Bolarinwa and I am a very good listener    ";

echo $statement . "<br />";
var_dump($statement);

echo strtoupper($statement) . "<br />";

echo strtolower($statement) . "<br />";

// Replacing string
echo  str_replace('listener', 'talker', $statement) . "<br />";


// Reversing a string
echo strrev($statement) . "<br />";

// Triming a string
echo trim($statement) . "<br />";
var_dump(trim($statement)) . "<br />";

echo "<br />";


echo substr($statement, 11, 9) . "<br />";;


// Escape characters
echo "Hello I have \$five "

?>

<!-- Git Crash course -->
<!-- https://www.youtube.com/watch?v=8JJ101D3knE&t=58s&pp=ygUYTW9zaCBIYW1lZGFuaSBnaXQgY291cnNl -->