<?php

namespace Acme;

use Acme\Users\Person;


class Staff {

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    protected $members = [];

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }

}