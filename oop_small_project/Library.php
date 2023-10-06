<?php
namespace mylibrary;
class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function findBookByTitle($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function removeBookByTitle($title) {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                return true;
            }
        }
        return false;
    }
}
