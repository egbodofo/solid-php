<?php

// Example 1
/**
 * An example of a Class that calculates interest for different types of account.
 * If we have to introduce a new account type, then we have to modify the class 
 * instead of extending its properties.
 */

//Bad Example
class SavingAccount  
{  
    public function CalculateInterest($accountType)  
    {  
        if($accountType=="Regular")  
        {  
            //Calculate interest for regular saving account 
        }  
        else if($accountType=="Salary")  
        {  
            //Calculate interest for saving account 
        }  
    }  
}


// Good Example
interface ISavingAccount  
{  
   public function CalculateInterest();  
}  

class RegularSavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for regular saving account
  }  
}  

  

class SalarySavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for saving account 
  }  
}


// Example 2
/**
 * Suppose we have to calculate the total area of some objects
 * and to do that we need an AreaCalculator class that does only
 * a sum of each shape area. The issue here is that each shape
 * Creation of User and storing a user should not be mixed up.
 */

// Bad Example 2

class Rectangle {
  
  public $width;
  public $height;
  
  public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
  }
}

class Square {

  public $length;
  
  public function __construct($length) {
      $this->length = $length;
  }
}


class AreaCalculator {

  protected $shapes;
  
  public function __construct($shapes = array()) {
      $this->shapes = $shapes;
  }
  
  public function sum() {
      $area = [];
      
      foreach($this->shapes as $shape) {
          if($shape instanceof Square) {
              $area[] = pow($shape->length, 2);
          } else if($shape instanceof Rectangle) {
              $area[] = $shape->width * $shape->height;
          }
      }
  
      return array_sum($area);
  }
}


// Good Example 2

/**
 * If we add another shape like a Circle we have to change the
 * AreaCalculator in order to calculate the new shape area and this
 * is not sustainable. The solution here is to create a simple Shape
 * interface that has the area method and will be implemented by all
 * other shapes. In this way, we will use only one method to calculate
 * the sum and if we need to add a new shape it will just implement the Shape interface.
 */
 

interface Shape {
  public function area();
}

class Rectangle implements Shape {

  private $width;
  private $height;
  
  public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
  }
  
  public function area() {
      return $this->width * $this->height;
  }
}

class Square implements Shape {

  private $length;
  
  public function __construct($length) {
      $this->length = $length;
  }
  
  public function area() {
      return pow($this->length, 2);
  }
}


class AreaCalculator {

  protected $shapes;
  
  public function __construct($shapes = array()) {
      $this->shapes = $shapes;
  }
  
  public function sum() {
      $area = [];
      
      foreach($this->shapes as $shape) {
          $area[] = $shape->area();
      }
  
      return array_sum($area);
  }
}


?>
