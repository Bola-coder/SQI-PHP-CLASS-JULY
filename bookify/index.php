<?php
$books = [
    ["title" => "There was a country", "author" => "Chinua Achebe", "ISBN" => "CA75758", "price" => 8000],
    ["title" => "Things fall apart", "author" => "Chinua Achebe", "ISBN" => "CA55646", "price" => 4000],
    ["title" => "The Lion and the jewel", "author" => "Wole Soyinka", "ISBN" => "Ws90762", "price" => 7500],
    ["title" => "Purple Hibiscuss", "author" => "Chiamanad Adiche", "ISBN" => "CA54123", "price" => 5000],
    ["title" => "Atomic Habits", "author" => "James Clear", "ISBN" => "JC53674", "price" => 3000],
    ["title" => "Can't Hurt Me", "author" => "David Goggins", "ISBN" => "DG67120", "price" => 4000],
    ["title" => "The Tempest", "author" => "Williams Shakespear", "ISBN" => "WS62901", "price" => 3000],
];

function addBook($title, $author, $ISBN, $price)
{
    global $books;
    array_push($books, [
        "title" => $title,
        "author" => $author,
        "ISBN" => $ISBN,
        "price" => $price
    ]);
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
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookify</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <main>
        <h1>All Books</h1>
        <div class="books">
            <?php
            foreach ($books as $book) {
                echo
                "<div class='book'>
                    <h3>$book[title]</h3>
                    <p>$book[author]</p>
                    <p>$book[ISBN]</p>
                    <p>$book[price]</p>
                    <button>View Book Details</button>
                </div>";
            }
            ?>
        </div>
    </main>
</body>

</html>