<?php 

class Person {
    private $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }


    // ------------------ getter ------------------------

    public function getAge()
    {
        return $this->age * 365;
    }

    // ------------------ setter ------------------------

    public function setAge($age)
    {
        if ($age < 18)
        {
            throw new Exception("Person is not old enough");
        }

        $this->age = $age;
    }
}

$john = new Person('DollyPizzle');

$john->setAge(30);

var_dump($john->getAge());
