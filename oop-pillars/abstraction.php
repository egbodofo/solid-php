<?php
// Example 1
// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

// Example 2

// Abstract classes are declared with the abstract keyword, and contain abstract methods.
abstract class Car {
      // Abstract classes can have properties
    protected $tankVolume;

  // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
    $this -> tankVolume = $volume;
    }

  // Abstract method
    abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car {
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        $miles = $this -> tankVolume*30;
        return $miles;
    }
}

class Toyota extends Car {
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        return $miles = $this -> tankVolume*33;
    }

    public function getColor()
    {
        return "beige";
    }
}

$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();//330
echo $toyota1 -> getColor();//beige

?>