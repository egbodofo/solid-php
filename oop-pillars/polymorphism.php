<?php 
interface FruitMixer {
    public function execute($message);
}

class Orange implements FruitMixer {
    public function execute($message)
    {
        var_dump('Mix Orange : ' . $message);
    }
}

class Mango implements FruitMixer{
    public function execute($message)
    {
        var_dump('Mix Mango : ' . $message);
    }
}
