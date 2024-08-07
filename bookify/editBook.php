<?php
session_start();
$book = $_SESSION['book'];
// print_r($book);
$id = htmlspecialchars($book['id'], ENT_QUOTES, 'UTF-8');
$title = htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8');
$author = htmlspecialchars($book['author'], ENT_QUOTES, 'UTF-8');
$isbn = htmlspecialchars($book['ISBN'], ENT_QUOTES, 'UTF-8');
$price = htmlspecialchars($book['price'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit New Book</title>
    <link rel="stylesheet" href="addBookStyles.css">
</head>

<body>
    <?php include("./nav.php"); ?>

    <div class="addbook">
        <form action="index.php" method="POST" class="addbook__form">
            <h2 class="form__title">Edit Book Details</h2>
            <div class="form__group">
                <label for="id">ID</label>
                <input readonly class="form__input" type="text" name="id" value="<?php echo $id; ?>">
            </div>
            <div class="form__group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form__input" value="<?php echo $title; ?>" />
            </div>
            <!-- <div class="form__group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form__input" value="<?php echo $author; ?>" />
            </div> -->
            <div class="form__group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form__input" value="<?php echo $isbn; ?>" />
            </div>
            <div class="form__group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form__input" value="<?php echo $price; ?>" />
            </div>
            <div class="form__group">
                <input type="submit" value="Edit Book" name="edit_book" class="form__submit-btn">
            </div>
        </form>
    </div>
</body>

</html>