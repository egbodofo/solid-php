<?php

  // Example of a public modifier

class Car {

    // public methods and properties.
    public $model;

    public function getModel()
    {
        return "The car model is " . $this -> model;
    }
}

    $mercedes = new Car();
    //Here we access a property from outside the class
    $mercedes -> model = "Mercedes";
    //Here we access a method from outside the class
    echo $mercedes -> getModel();

  // Example of a private modifier

class Car {

  //private
    private $model;

    public function getModel()
    {
    return "The car model is " . $this -> model;
    }
}

$mercedes = new Car();

// We try to access a private property from outside the class.
$mercedes -> model = "Mercedes benz";
echo $mercedes -> getModel();


// To access the model variable we use setters and getters

class Car {

  //the private access modifier denies access to the method from outside the class’s scope
    private $model;

  //the public access modifier allows the access to the method from outside the class
    public function setModel($model)
    {
    $this -> model = $model;
    }

    public function getModel()
    {
    return "The car model is  " . $this -> model;
    }
}

$mercedes = new Car();
//Sets the car’s model
$mercedes -> setModel("Mercedes benz");
//Gets the car’s model
echo $mercedes -> getModel();


// Simple example
class Fruit {
    public $name;
    protected $color;
    private $weight;
}

    $mango = new Fruit();
    $mango->name = 'Mango'; // OK
    $mango->color = 'Yellow'; // ERROR
    $mango->weight = '300'; // ERROR


?>