<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Forms</title>

    <style>
        form {
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            border: 1px solid blue;
            border-radius: 5px;
            margin-top: 2rem;
        }

        input {
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
            border: 0;
            border-bottom: 2px solid blue;
        }

        input:focus {
            outline: none;
        }

        .submit__btn {
            background-color: blue;
            color: white;
            border: 0;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit__btn:hover {
            background-color: darkblue;
        }

        label {
            font-weight: bold;
            font-size: 12px;
            margin-bottom: 4px;
        }

        .title {
            text-align: center;
            color: blue;
            font-weight: 800;
        }
    </style>
</head>

<body>

    <form action="dashboard.php" method="POST">
        <h2 class="title">Enter your Registration details</h2>
        <label for="name">Name:</label>
        <input type="text" name="fullname" id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Register" class="submit__btn" name="register">
    </form>

    <!-- Login -->
    <form action="dashboard.php" method="POST">
        <h2 class="title">Enter your Login details</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login" class="submit__btn" name="login">
    </form>

    <form action="dashboard.php" method="POST">
        <button type="submit">
            View Dashboard As Guest
        </button>
    </form>
</body>

</html>


<!-- <?php
        if (isset($_POST['register'])) {
            if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password'])) {
                echo "<h1>Please fill all fields</h1>";
                echo "<br />";
                return;
            } else {
                header("Location: dashboard.php");
            }
        }
        ?> -->