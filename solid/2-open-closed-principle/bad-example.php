<?php




// Bad example 1
/**
 * Suppose we have to calculate the total area of some objects
 * and to do that we need an AreaCalculator class that does only
 * a sum of each shape area. The issue here is that each shape
 * The issue here is that each shape has a different method to
 * calculate its own area..
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

$recShape = new Rectangle(4,6);
$sqrShape = new Square(7);

$calArea = new AreaCalculator([$recShape, $sqrShape]);

var_dump($calArea->sum());


// Example 2
/**
 * An example of a Class that calculates interest for different types of account.
 * If we have to introduce a new account type, then we have to modify the class
 * instead of extending its properties.
 */

//Bad example 2
class SavingAccount
{
    public function CalculateInterest($accountType)
    {
        if($accountType=="Regular")
        {
            return "I calculate interest for regular saving account";
        }
        else if($accountType=="Salary")
        {
            return "I calculate interest for saving account";
        }
    }
}

$accountType = "Salary";
$newAccount = new SavingAccount;
var_dump($newAccount->CalculateInterest($accountType));


?>
