<?php
class Person {
  // Properties
  private $name;
  private $age;
  private $department;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

class FilterByDepartment {
    // takes in only one field on class 
    // person which is Department to make this work 
}
?>