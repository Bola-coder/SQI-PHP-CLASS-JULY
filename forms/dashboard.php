<?php
// CRUD
// Create, Read, Update, Delete
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['register'])) {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($name) || empty($email) || empty($password)) {
            echo "Please fill all fields";
            echo "<br />";
            return;
        }
        echo
        "<div>
            <h2>Welcome $name</h2>
            <p>Your email address is: $email</p>
            <p>Your password is: $password</p>
        </div>";
    } else if (isset($_POST["login"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (empty($email) || empty($password)) {
            echo "Please fill all fields";
            echo "<br />";
            return;
        }
        echo
        "<div>
            <h1>Welcome $email</h1>
            <p>Your password is: $password</p>
        </div>";
    } else {
        echo "Welcome, you are not authorized. Please go back to login or register";
    }
} else {
    echo "You are not allowed to do this!!";
}
