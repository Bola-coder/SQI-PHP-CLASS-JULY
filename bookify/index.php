<?php
session_start();
include("./../database/connection.php");

$books = [];

function getAllBooks()
{
    global $books;
    global $conn;
    $selectSQl = "SELECT books.id as 'id', title , author, ISBN, price, books.image as 'image', fullname as 'author' FROM books INNER JOIN authors ON books.author = authors.id";

    $result = $conn->query($selectSQl);

    if ($result->num_rows > 0) {
        for ($i = 0; $i < $result->num_rows; $i++) {
            $book = $result->fetch_assoc();
            array_push($books, $book);
        }
    }
}

getAllBooks();


function addBook($title, $author, $ISBN, $price)
{
    global $books;
    array_push($books, [
        "id" => count($books) + 1,
        "title" => $title,
        "author" => $author,
        "ISBN" => $ISBN,
        "price" => $price
    ]);
}


function editBook($id, $title,  $ISBN, $price)
{
    global $conn;
    $editSql = "UPDATE books SET title = ?, ISBN = ?, price = ? WHERE id = ?";
    $stmt = $conn->prepare($editSql);
    $stmt->bind_param("ssdi", $title, $ISBN, $price, $id);
    if ($stmt->execute()) {
        echo "Book updated successfully:<br>";
        header("Location: index.php");
        exit();
    } else {
        echo "Failed to update book";
        $stmt->close();
    }
}


function viewBookDetaiils($bookTitle)
{
    global $books;
    foreach ($books as $book) {
        if ($book['title'] == $bookTitle) {
            return $book;
        }
    }
    return null;
}

function displayBooks()
{
    global $books;
    foreach ($books as $book) {
        echo
        "<div class='book'>
        <img src=$book[image] alt=Book image width=100 height=100/>
            <h3>$book[title]</h3>
            <p>$book[author]</p>
            <p>$book[ISBN]</p>
            <p>$book[price]</p>
            <form class='viewbook__form'  method='GET'>
                <input type='hidden' name='book_title' value='$book[title]'>
                <button type='submit' name='view_book'>View Book Details</button>
            </form>
        </div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_book'])) {
        $title = $_POST["title"];
        $author = $_POST['author'];
        $ISBN = $_POST['isbn'];
        $price = $_POST['price'];

        if (empty($title) || empty($author) || empty($ISBN) || empty($price)) {
            echo "Failed to add new Book. Please fill in all fields";
            return;
        }
        addBook($title, $author, $ISBN, $price);
    } else if (isset($_POST['edit_book'])) {
        $id = $_POST['id'];
        $title = $_POST["title"];
        // $author = $_POST['author'];
        $ISBN = $_POST['isbn'];
        $price = $_POST['price'];
        if (empty($title)  || empty($ISBN) || empty($price)) {
            echo "Failed to edit new Book. Please fill in all fields";
            return;
        }
        editBook($id, $title, $ISBN, $price);
        // displayBooks();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['view_book'])) {
        $bookTitle = $_GET['book_title'];
        $bookdetails = viewBookDetaiils($bookTitle);
        if ($bookdetails) {
            $_SESSION['book'] = $bookdetails;
            header("Location: viewbook.php");
        } else {
            echo "Book not found";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookify</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <main>
        <h1>All Books</h1>
        <div class="books">
            <?php
            displayBooks()
            ?>
        </div>
    </main>
</body>

</html>

<!-- Refactor the addBook implementation to use the database. i.e new book added get saved to the books collection in the database.  -->