<?php

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