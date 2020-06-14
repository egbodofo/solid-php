<?php

// Example 1
/**
 * An example of a Class that violates the Single Responsibility Principle.
 * Creation of customer and order mixed up.
 */


// Bad Example 1
class Order {

    public function createCustomer()
    {
        return "New customer added";
    }

    public function getOrderFromDatabase() 
    {
        return "Submit Orders for processing";
    }

    public function submitOrder() 
    {
        return "Submit Orders for processing";
    }

    public function calculatePrice() 
    {
        return "Submit Orders for processing";
    }

    public function generatePdfReceipt() 
    {
        return "Submit Orders for processing";
    }
}

$newOrder1 = new Order;
var_dump($newOrder1->createCustomer);


// Example 2
/**
 * An example of a User class that violates the Single Responsibility Principle.
 * Creation of User and storing a user should not be mixed up.
 */

// Bad Example 2
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

    public function store() {
        return "Store attributes into a database...";
    }
}

$newPerson = new User;
$newPerson->set_name('Cole');
var_dump($newPerson->get_name());

?>
