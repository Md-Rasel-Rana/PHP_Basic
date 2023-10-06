<?php

use bookclass\Book;
use mylibrary\Library;
require_once 'Book.php';
require_once 'Library.php';

// Create books
$book1 = new Book("Book 1", "Author 1");
$book2 = new Book("Book 2", "Author 2");

// Create a library and add books to it
$library = new Library();
$library->addBook($book1);
$library->addBook($book2);

// List all books in the library
$books = $library->getBooks();
echo "Books in the library:<br>";
foreach ($books as $book) {
    echo "Title: " . $book->getTitle() . ", Author: " . $book->getAuthor() . "<br>";
}

// Find and remove a book by title
$titleToFind = "Book 1";
$foundBook = $library->findBookByTitle($titleToFind);
if ($foundBook) {
    echo "Found book: " . $foundBook->getTitle() . "<br>";
    $library->removeBookByTitle($titleToFind);
    echo "Removed book: " . $titleToFind . "<br>";
} else {
    echo "Book not found: " . $titleToFind . "<br>";
}
