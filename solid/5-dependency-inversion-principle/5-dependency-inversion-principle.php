<?php

// Example 1
/**Taking an example of a PageLoader class that
 * uses a MySqlConnection class to load pages from
 * a database we might create the classes so that
 * the connection class is passed to the constructor
 * of the PageLoader class
 * This structure means that we are essentially stuck with
 * using MySQL for our database layer. What happens if we
 * want to swap this out for a different database adaptor?
 * */


// Bad Example
class MySqlConnection {
    public function connect() {}
}

class PageLoader {
    private $dbConnection;
    public function __construct(MySqlConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}

// Good example
/**
 * The solution here is to create an interface called
 * DbConnectionInterface and then implement this interface
 * in the MySqlConnection class. Then, instead of relying on
 * a MySqlConnection object being passed to the PageLoader
 * class, we instead rely on any class that implements the
 * DbConnectionInterface interface.
 */

interface DbConnectionInterface {
    public function connect();
}

class MySqlConnection implements DbConnectionInterface {
    public function connect() {}
}

class PageLoader {
    private $dbConnection;
    public function __construct(DbConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}


//Example 2
// Bad example
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
$read = new EBookReader($b);
 
$read->read();




// Good Example

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
$read = new EBookReader($b);
 
$read->read();


?>
