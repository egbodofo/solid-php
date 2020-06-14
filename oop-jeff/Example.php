<?php 

// class Mother {

//     public function getEyeCount()
//     {
//         return 2;
//     }

// }

// class Child extends Mother {
    
// } 



// abstract class Shape {

//     protected $color;

//     public function __construct($color='red')
//     {
//         $this->color = $color;
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }

//     abstract protected function getArea();
// } 

// class Square extends Shape{

//     protected $length = 4;

//     public function getArea()
//     {
//         return pow($this->length, 2);
//     }

// } 

// class Triangle extends Shape{
//     protected $base = 4;

//     protected $height = 7;

//     public function getArea()
//     {
//         return .5 * $this->base * $this->height;
//     }
// } 

// class Circle extends Shape{
//     protected $radius = 7;


//     public function getArea()
//     {
//         return M_PI * pow($this->radius, 2);
//     }
// } 

// echo (new Square)->getArea();
// echo (new Triangle)->getArea();

// (new Child)->getEyeCount();
// echo (new Square('green'))->getColor();

// $circle = new Circle;
// echo $circle->getArea(); 

// (new Circle)->getArea();

abstract class Mailer {
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends Mailer {
    public function sendWelcomeEmail(User $user) 
    {
        return $this->send($user->email)
    }
}
