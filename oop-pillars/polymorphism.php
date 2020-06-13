<?php

// Example 1
interface Shape {
    public function calcArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    // calcArea calculates the area of circles 
    public function calcArea()
    {
        return $this -> radius * $this -> radius * pi();
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    // calcArea calculates the area of rectangles   
    public function calcArea()
    {
      return $this -> width * $this -> height;
    }
}



echo $circ -> calcArea();
echo $rect -> calcArea();

  // Example 2
interface FruitMixer {
    public function mix($fruit);
}

class Orange implements FruitMixer {
    public function mix($fruit)
    {
        var_dump('I am an orange mixer. ' . $fruit);
    }
}

class Mango implements FruitMixer{
    public function mix($fruit)
    {
        var_dump('I mix mango. ' . $fruit);
    }
}

$mixMango = new Mango();
var_dump($mixMango->mix('Would you like to try a cup'));

$mixOrange = new Orange();
var_dump($mixOrange->mix('Kindle press the red button to mix'));
