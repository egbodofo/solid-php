<?php
interface EBook{
    function read();
}

// Low Level Class 
class PDFBook implements EBook{
 
    function read() {
        return "reading a pdf book.";
    }
}

// High Level Class 
class EBookReader {
 
    private $book;
 
    function __construct(EBook $book) {
        $this->book = $book;
    }
 
    function read() {
        return $this->book->read();
    }
 
}


$book = new PDFBook();
$read = new EBookReader($book);

$read->read();