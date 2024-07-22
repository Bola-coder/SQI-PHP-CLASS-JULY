<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="addBookStyles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("./nav.php");
    ?>

    <div class="addbook">
        <form action="index.php" method="POST" id="addbook__form">
            <h2 class="form__title">Add a new book</h2>
            <div class="form__group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form__input" />
            </div>
            <div class="form__group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form__input" />
            </div>
            <div class="form__group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form__input" />
            </div>
            <div class="form__group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form__input" />
            </div>
            <div class="form__group">
                <input type="submit" value="Add Book" name="add_book" class="form__submit-btn">
            </div>
        </form>
    </div>
</body>

</html