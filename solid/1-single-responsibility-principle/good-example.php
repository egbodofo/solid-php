
<?php

// Good Example 1
class Customer {

    public function createCustomer()
    {
        return "New customer added";
    }

}

class Order {

    public function getOrderFromDatabase() 
    {
        return "Submit Orders for processing";
    }

    public function submitOrder() 
    {
        return "Submit Orders for processing";
    }

}

$customer = new Customer;
var_dump($customer->createCustomer);

$newOrder2 = new Order;
var_dump($newOrder2->submitOrder);

// Good Example 2
class User {
    private $name;

    // Getter and setter...
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}


class UserDB {
  
    public function store(User $user) {
        return "Store the user into a database...";
    }
}


$newPerson = new User;
$newPerson->set_name('Cole');
var_dump($newPerson->get_name());

$newDB = new UserDB();
var_dump($newDB->store($newPerson));


// Good Example 3

class Notes {

    function getTitle() {
        return "It's a learning process";
    }

    function getDate() {
        return "Today is " . date("Y/m/d") . ", Welcome back people!";
    }

}

class NoteCount {

    function getLength() {
        return "The note has 250 characters";
    }

}


$note = new Notes();
var_dump($note->getDate());

$count = new NoteCount();
var_dump($count->getLength());