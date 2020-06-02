<?php

// Bad Example

interface RestaurantInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline();
        public function  walkInCustomerOrder();
        public function  payInPerson();

}

class OnlineClient implements RestaurantInterface
{
        public function  acceptOnlineOrder()
        {
            //logic for placing online order
        }

        public function  payOnline()
        {
            //logic for paying online 
        }
}




// Good Example

interface OnlineClientInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline();
}

interface WalkInCustomerInterface
{
        public function  walkInCustomerOrder();
        public function  payInPerson();
}

class OnlineClient implements OnlineClientInterface
{
        public function  acceptOnlineOrder()
        {
            //logic for placing online order
        }

        public function  payOnline()
        {
            //logic for paying online 
        }
}

class WalkInCustomer implements WalkInCustomerInterface
{
        public function  walkInCustomerOrder()
        {
            //logic for walk in customer order
        }

        public function  payInPerson()
        {
            //logic for payment in person 
        }
}


// Example 2

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
class Driver {
    public function operate(Car $car) 
    {
        $car->getFuel();
        $car->shiftGear();
        $car->steer();
    }
}

class Car implements CarInterface {
    public function getFuel()
    {
       // Logic to get fuel
    }

    public function shiftGear()
    {
       // Logic to get shift gear
    }

    public function steer()
    {
       // Logic to steer
    }
}

class ElectricCar implements CarInterface {
    public function getFuel()
    {
       // This car does not require to get fuel
    }

    public function shiftGear()
    {
       // Logic to get shift gear
    }

    public function steer()
    {
       // Logic to steer
    }
}




?>
