<?php

// Base class
class Shape {
    public function calculateArea() {
        return 0; // Default implementation for the base class
    }
}

// Derived class 1
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Method overriding
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Derived class 2
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Method overriding
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Function that demonstrates polymorphism
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// Create objects of different classes
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Call the function with different objects
printArea($circle);
printArea($rectangle);
?>
