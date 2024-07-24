<?php
session_start();
$books = [
    ["id" => 1, "title" => "There was a country", "author" => "Chinua Achebe", "ISBN" => "CA75758", "price" => 8000],
    ["id" => 2, "title" => "Things fall apart", "author" => "Chinua Achebe", "ISBN" => "CA55646", "price" => 4000],
    ["id" => 3, "title" => "The Lion and the jewel", "author" => "Wole Soyinka", "ISBN" => "Ws90762", "price" => 7500],
    ["id" => 4, "title" => "Purple Hibiscuss", "author" => "Chiamanad Adiche", "ISBN" => "CA54123", "price" => 5000],
    ["id" => 5, "title" => "Atomic Habits", "author" => "James Clear", "ISBN" => "JC53674", "price" => 3000],
    ["id" => 6, "title" => "Can't Hurt Me", "author" => "David Goggins", "ISBN" => "DG67120", "price" => 4000],
    ["id" => 7, "title" => "The Tempest", "author" => "Williams Shakespear", "ISBN" => "WS62901", "price" => 3000],
];

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



function editBook($id, $title, $author, $ISBN, $price)
{
    global $books;
    foreach ($books as &$book) {
        // echo "Checking book with ID: {$book['id']}<br>";
        if ($book['id'] == $id) {
            $book['title'] = $title;
            $book['author'] = $author;
            $book['ISBN'] = $ISBN;
            $book['price'] = $price;
            echo "Book updated successfully:<br>";
            return $book;
        }
    }
    echo "No book found with ID: $id<br>";
    return null;
}


function viewBookDetaiils($bookId)
{
    global $books;
    foreach ($books as $book) {
        if ($book['id'] == $bookId) {
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
            <h3>$book[title]</h3>
            <p>$book[author]</p>
            <p>$book[ISBN]</p>
            <p>$book[price]</p>
            <p>$book[id]</p>
            <form class='viewbook__form'  method='GET'>
                <input type='hidden' name='book_id' value='$book[id]'>
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
        $author = $_POST['author'];
        $ISBN = $_POST['isbn'];
        $price = $_POST['price'];
        if (empty($title) || empty($author) || empty($ISBN) || empty($price)) {
            echo "Failed to edit new Book. Please fill in all fields";
            return;
        }
        editBook($id, $title, $author, $ISBN, $price);
        // displayBooks();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['view_book'])) {
        $bookID = $_GET['book_id'];
        $bookdetails = viewBookDetaiils($bookID);
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