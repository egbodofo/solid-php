<?php
interface Animal {
    public function communicate();
}

class Dog implements Animal {
    public function communicate()
    {
        return "bark"
    }
}

class cat implements Animal {
    public function communicate()
    {
        return "meow"
    }
}