<?php
session_start();
$book = $_SESSION['book'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookify | View book details</title>
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <?php include('nav.php') ?>
    <h2 class="bookdetails__title">Book Details</h2>
    <?php if ($book) : ?>
        <div class="book-details">
            <p>Title: <?php echo $book['title']; ?></p>
            <p>Author: <?php echo $book['author']; ?></p>
            <p>ISBN: <?php echo $book['ISBN']; ?></p>
            <p>Price: <?php echo $book['price']; ?></p>
        </div>
    <?php else : ?>
        <p>No book details available.</p>
    <?php endif; ?>
</body>

</html>