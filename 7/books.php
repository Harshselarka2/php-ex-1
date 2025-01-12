<?php
class Book {
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getDetails() {
        return "Title: " . $this->title . "<br>Author: " . $this->author . "<br>Price: ₹" . $this->price;
    }
}

$book1 = new Book("Atomic Habits", "James Clear", 999);
$book2 = new Book("C with Dennis Ritchie", "Dennis Ritchie", 1099);
$book3 = new Book("Blockchain Basics", "Daniel Drescher", 1499);

echo $book1->getDetails() . "<br><br>";
echo $book2->getDetails() . "<br><br>";
echo $book3->getDetails();
?>
