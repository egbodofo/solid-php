<?php

// Example 1

/**
 *Beacuse of our interface we have a contractual binding,
 * you have to override the 3 methods. But an electric car
 * doesn’t require to get fuel.
 */

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


// Example 2
interface RestaurantInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline();
        public function  walkInCustomerOrder();
        public function  payInPerson();

}


class OnlineCustomer implements RestaurantInterface
{
        public function  acceptOnlineOrder()
        {
            return "I accept order online";
        }

        public function  payOnline()
        {
            return "Pay online";
        }
}

class WalkInCustomer implements RestaurantInterface
{
    public function  walkInCustomerOrder()
    {
        return "You can walk in and make an order";
    }

    public function  payInPerson()
    {
        return "Pay Cash";
    }
}

$paystack = new OnlineCustomer;
var_dump($paystack->acceptOnlineOrder());

$cash = new WalkInCustomer;
var_dump($cash->payInPerson());


?>
