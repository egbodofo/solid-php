<?php

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