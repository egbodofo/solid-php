<?php

// Low Level Class
class PDFBook {
 
    function read() {
        return "reading a pdf book.";
    }
}

// High Level Class
class EBookReader {
 
    private $book;
 
    function __construct(PDFBook $book) {
        $this->book = $book;
    }
 
    function read() {
        return $this->book->read();
    }
 
}


$book = new PDFBook();
$read = new EBookReader($book);
 
var_dump($read->read());