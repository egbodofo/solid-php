<?php

interface ObjectArithmetics {

    public function getAll();
}

class Calculator implements ObjectArithmetics {

    public function getAll()
    {
        // Returns a solved array of objects
        return [(1+2), (2*6), (8/2)];
    }
}

$file = new Calculator;
var_dump($file->getall());
