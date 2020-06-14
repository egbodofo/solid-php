<?php

// Example 1

interface ObjectArithmetics {

    public function getAll();
}

class ForArray implements ObjectArithmetics {
 
public function getAll()
{
    // Returns a solved array of objects
    return [(1+2), (2*6), (8/2)];
}
}

class ForObjects implements ObjectArithmetics {
public function getAll()
    {
        return [(1+2)+(3*3)];
    }
}

$file = new ForArray;
var_dump($file->getall());

$file2 = new ForObjects;
var_dump($file2->getall());


?>
