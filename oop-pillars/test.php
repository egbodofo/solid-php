<?php

interface CarInterface
{
    public function getFuel();

    public function shiftGear();

    public function steer();
}


class Car implements CarInterface {
    public function getFuel()
    {
        return "I use gasoline";
    }

    public function shiftGear()
    {
        return "I have 5 gears, use the turtle to engage and disengage";
    }

    public function steer()
    {
        return "Control my movement";
    }
}

class Driver {
    public function operate(Car $car) 
    {
        $car->getFuel();
        $car->shiftGear();
        $car->steer();
    }
}

class ElectricCar implements CarInterface {

    public function shiftGear()
    {
        return "I have 5 gears, use the turtle to engage and disengage";
    }

    public function steer()
    {
        return "Control my movement";
    }
}

$tesla = new ElectricCar;
var_dump($tesla->shiftGear());