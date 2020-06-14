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
        return (1*2)+(2*5);
    }
}

$file = new ForArray;
var_dump($file->getall());

$file2 = new ForObjects;
var_dump($file2->getall());


// Example 2

class Bird
{
    public function  Fly()
    {
        echo '<script>console.log("I can Fly")</script>';
    }
}

class Parrot extends Bird
{
    public function  Fly()
    {
        echo '<script>console.log("I can Fly")</script>';
        // A parrot can fly, accepted
    }
}

class Ostrich extends Bird
{
    public function  Fly()
    {
        echo '<script>console.log("I can Fly")</script>';
        // But an ostrich can't fly so this won't work
    }
}

$ost = new Ostrich;
var_dump($ost->Fly());