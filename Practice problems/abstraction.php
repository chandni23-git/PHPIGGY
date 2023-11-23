<?php

// Abstract class with abstract method
abstract class Shape {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method (to be implemented by derived classes)
    abstract public function calculateArea();
}

// Concrete class implementing the abstract class
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    // Implementation of the abstract method
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Concrete class implementing the abstract class
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }

    // Implementation of the abstract method
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Create objects of the concrete classes
$circle = new Circle("Circle", 5);
$rectangle = new Rectangle("Rectangle", 4, 6);

// Call the abstract method on each object
echo $circle->name . " Area: " . $circle->calculateArea() . "<br>";
echo $rectangle->name . " Area: " . $rectangle->calculateArea() . "<br>";

?>
