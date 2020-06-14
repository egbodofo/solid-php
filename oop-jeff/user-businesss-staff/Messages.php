<?php

use Acme\Users\Person;
use Acme\Staff;
use Acme\Business;



$dollyp = new Person('Dollypizzle');

$staff = new Staff([$dollyp]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Baba Oja'));

// var_dump($staff);
var_dump($laracasts->getStaffMembers());