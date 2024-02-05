<?php 
/* --- Object Oriented Programming -- */

/*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
    OOP consists of classes that can hold "properties" and "methods". 
    Objects can be created from classes.
*/

class User {
    // Constructor
    public function __construct($name, $email, $password = 'password') {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Properties
    public $name;
    public $email;
    public $password;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// $user1 = new User('Andrei', 'andrei@gmail.com');
// $user2 = new User('Brad', 'brad@yahoo.com', 'qwerty');

// $user1->set_name('Andrei');
// $user2->set_name('Brad');

// echo $user1->get_name();
// echo $user2->get_name();

// var_dump($user1);
// echo '<br>';
// var_dump($user2);
// echo '<br>';

// Inheritance

class Employee extends User {
    // Constructor
    public function __construct($name, $email, $password = 'password', $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public $title;

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Andrei', 'andrei@gmail.com', '1234esz567ygv', 'jr. frontend developer');

echo $employee1->get_name(), '<br>', $employee1->get_title();