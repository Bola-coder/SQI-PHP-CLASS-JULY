<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "class";

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connected successfullyy";

$sql = "SELECT * FROM users WHERE id > 5";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    print_r($result);
    echo "<br />";
    echo "<br />";

    for ($i = 0; $i < $result->num_rows; $i++) {
        $user = $result->fetch_assoc();
        print_r($user['fullname']);
        echo "<br />";
        echo "<br />";
    }
}


// $conn->close()