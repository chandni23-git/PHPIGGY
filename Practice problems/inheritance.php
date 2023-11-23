<?php

// Base class
class Animal {
    protected $name;
    protected $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function makeSound() {
        echo $this->name . " says " . $this->sound . "<br>";
    }
}

// Derived class
class Dog extends Animal {
    public function fetch() {
        echo $this->name . " is fetching a ball.<br>";
    }
}

// Derived class
class Cat extends Animal {
    public function climb() {
        echo $this->name . " is climbing a tree.<br>";
    }
}

// Create objects of the derived classes
$dog = new Dog("Buddy", "Woof");
$cat = new Cat("Whiskers", "Meow");

// Use inherited method
$dog->makeSound(); 
$cat->makeSound(); 


$dog->fetch();  
$cat->climb();     

?>
