<?php

// Example 1
/**
 * An example of a Class that violates the Single Responsibility Principle.
 * Creation of customer and order mixed up.
 */


// Bad Example 1
class CustomerOrder {
     
    public function createCustomer(Request $request) {
        // Create customer
    }
     
    public function submitOrder(Request $request) {
        // Submit Orders for processing
    }
}



// Good Example 1
class Customer {
     
    public function createCustomer(Request $request) {
        // Create customer
    }
     
}

class Order {
     
    public function submitOrder(Request $request) {
        // Submit Orders for processing
    }
     
}

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
        // Store attributes into a database...
    }
}

// Good Example 2

class User {
    private $name;

    // Getter and setter for user...
}


class UserDB {
  
    public function store(User $user) {
        // Store the user into a database...
    }
}

?>
