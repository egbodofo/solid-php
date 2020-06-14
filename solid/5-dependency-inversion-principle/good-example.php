<?php

interface EBook{
    function read();
}

// Low Level Class 1
class PDFBook implements EBook{

    function read() {
        return "reading a pdf book.";
    }
}

// Low Level Class 2
class EpubBook implements EBook {

    function read() {
        return "reading a epub book.";
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

var_dump($read->read());












//Example 2
interface PostRepo {
    public function getAllPost();
}

class EloqunetDbRepo implements  PostRepo {
    public function getAllPost() {
        return EloquentPost::all();
    }
}

class MarkdownRepo implements PostRepo {
    public function getAllPost() {
        return file_get_contents('./dndd.md');
    }
}

class Post {

    public function __construct(PostRepo $db)
    {
        $this->db = $db;
    }

    public function index()
    {
        // get blog post
        return $this->db->getAllPost();
    }
}

$dbPosts = new Post(new EloqunetDbRepo);
$mdPosts = new Post(new MarkdownRepo);

var_dump($dbPosts->index());
var_dump($mdPosts->index());


