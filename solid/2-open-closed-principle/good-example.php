<?php

// Good example 1

abstract class FruitMixer
{

    abstract protected function getMixer();

}

class Orange extends FruitMixer
{
    public $citrus = 5;
    public $vitamin =10;

    public function getMixer()
    {
        return $this->citrus + $this->vitamin * 2;
    }
}

class WaterMelon extends FruitMixer
{
    protected $size = 20;
    protected $vitamin = 10;

    public function getMixer()
    {
        return pow($this->size, 2) * $this->vitamin;
    }
}

class Cherry extends FruitMixer{
    protected $count = 30;

    protected $vitamin = 7;

    public function getMixer()
    {
        return $this->count * $this->vitamin;
    }
}


$watermelon = new WaterMelon;
var_dump($watermelon->getMixer());

$orange = new Orange();
var_dump($orange->getMixer());

$cherry = new Cherry;
var_dump($cherry->getMixer());



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

$recShape = new Rectangle(6,5);
$sqrShape = new Square(4);


$cal = new AreaCalculator([$recShape, $sqrShape]);

var_dump($cal->sum());



// Good example 3

interface ISavingAccount
{
    public function CalculateInterest();
}

class RegularSavingAccount implements ISavingAccount
{
    public function CalculateInterest()
    {
        return "I calculate interest for regular saving account!";
    }
}


class SalarySavingAccount implements ISavingAccount
{
    public function CalculateInterest()
    {
        return "Calculate interest for saving!";
    }
}

$calcRegAcc = new RegularSavingAccount;
var_dump($calcRegAcc->CalculateInterest());






