
<?php

class Notes {
 
    function getTitle() {
        return "It's a learning process";
    }
 
    function getDate() {
      return 'It was posted today';
    }
 
}
 
class NoteCount {
 
    function getLength() {
        return "The note has 250 characters";
    }
 
}


$note = new Notes('latest');
var_dump($note->getDate());

$count = new NoteCount('abc');
var_dump($count->getLength());