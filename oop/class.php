<?php
class Books
{
    // attributes
    protected  $title;
    private $price;

    // Constructor
    function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
        echo "This is the parent constructor";
    }

    // Destructor
    function __destruct()
    {
        echo "The class has finally been destroyed <br />";
    }


    // Setter and Getters
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

// Objects
$book1 = new Books("Ralia the sugar girl", 200);
$book2 = new Books("Ijimere Sogi gun", 300);

print("Book one's title is " . $book1->getTitle() . " and it costs " . $book1->getPrice() . "<br />");

print("Book two's title is " . $book2->getTitle() . " and it costs " . $book2->getPrice() . "<br />");


$book1->setTitle("The Alchemist");
$book1->setPrice(2000);


$book2->setTitle("The Richest");
$book2->setPrice(3000);

// print_r($book1);
// echo "<br />";

// print_r($book2);


print("Book one's title is " . $book1->getTitle() . " and it costs " . $book1->getPrice() . "<br />");

print("Book two's title is " . $book2->getTitle() . " and it costs " . $book2->getPrice() . "<br />");


// Inheritance
class Novel extends Books
{
    var $author;

    function __construct($title, $price, $author)
    {
        parent::__construct($title, $price);
        $this->author = $author;
        echo "This is the child constructor";

        echo '<br />';
        echo $this->title . "Hehheheh";
        echo '<br />';
    }



    function setAuthor($author)
    {
        $this->author = $author;
    }

    function getAuthor()
    {
        return $this->author;
    }
}

// Objects

$novel1 = new Novel("Can't Hurt Me", 3500, "David Goggins");

// print_r($novel1);
echo "<br />";
echo $novel1->getAuthor();
echo "<br />";
echo $novel1->getTitle();
echo "<br />";
echo $novel1->getPrice();


echo "<br />";
// echo $novel1->title;
