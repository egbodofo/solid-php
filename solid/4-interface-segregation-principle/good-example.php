<?php

// Example 1

interface OnlineCustomerInterface
{
        public function  acceptOnlineOrder();
        public function  payOnline($cryptocash);
}

interface WalkInCustomerInterface
{
        public function  walkInCustomerOrder();
        public function  payInPerson($cash);
}

class OnlineCustomer implements OnlineCustomerInterface
{
        public function  acceptOnlineOrder()
        {
            return 'You just made an order online';
        }

        public function  payOnline($cryptocash)
        {
            $onlineRate = 10;
            return "The price is " . $onlineRate * $$cryptocash;
        }
}

class WalkInCustomer implements WalkInCustomerInterface
{
        public function  walkInCustomerOrder()
        {
            return "You can walk in for to order";
        }

        public function  payInPerson($cash)
        {
            $cashRate = 10;
            return "The price is " . $cashRate * $cash;
        }
}

$jack = new OnlineCustomer;
var_dump($jack->acceptOnlineOrder());

$cryptocash = 15;
$total1 = new OnlineCustomer;
var_dump($total1->payOnline($cryptocash));

$james = new WalkInCustomer;
var_dump($james->walkInCustomerOrder());

$cash = 20;
$total2 = new WalkInCustomer;
var_dump($total2->payInPerson($cash));


// Example 2

interface Lawnmower {
    public function cut_grass();
}

// does not implement interface Lawnmower
class CrappyMowersInc  {
    public function leak_oil() {
        return 'leaking oil';
    }
}
$mower = new CrappyMowersInc;

var_dump($mower->leak_oil()); // leaking oil

class Kubota implements Lawnmower {
    public function cut_grass(){
        return 'cutting major grass';
    }
}
$mower = new Kubota;
var_dump($mower->cut_grass()); // cutting major grass
 
class JohnDeere implements Lawnmower {
    public function cut_grass(){
        return 'cutting grass like a champion';
    }
}
$mower = new JohnDeere;
var_dump($mower->cut_grass()); // cutting grass like a champion


// Example 3

interface GasolineCar
{
    public function getFuel();

    public function steer();
}

interface ElectricCar
{
    public function getCharged();

    public function pilot();
}

class BMW implements GasolineCar
{
    public function getFuel()
    {
        return 'I use gasoline';
    }
    public function steer()
    {
        return 'Use the steering to control me';
    }
}

class Tesla implements ElectricCar 
{
    public function getCharged()
    {
        return 'I need electricity to function';
    }
    public function pilot()
    {
        return 'I can be auto-piloted';
    }
}

class Locomotive {
 
    function getCoal() {
        return "I am powered by coal";
    }
}


$drive = new BMW('latest');
var_dump($drive->getFuel());

$fly = new Tesla('abc');
var_dump($fly->getCharged());

$slow = new Locomotive('abc');
var_dump($slow->getCoal());