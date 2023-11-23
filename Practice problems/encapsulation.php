<?php
class Car{
    private $model;
    private $color;
    private $speed;

    public function __construct($model,$color,$speed){
        $this->model=$model;
        $this->color=$color;
        $this->speed=$speed;
    }

    public function getModel(){
        return $this->model;
    }
    public function getColor(){
        return $this->color;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setModel($model){
        $this->model=$model;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function setSpeed($speed){
        $this->speed=$speed;
    }
    public function displayDetails(){
        

        echo "Model: " . $this->getModel() . ", Color: " . $this->getColor() . ", Speed: " . $this->getSpeed(). "km/hr";
    }
}

    $myCar = new Car("Range-Rover","Black",60);

    echo "Model:".$myCar->getModel(). "<br>";
    echo "Color:".$myCar->getColor(). "<br>";
    echo "Speed:".$myCar->getSpeed(). "km/hr<br>";
    
    $myCar->displayDetails();

    $myCar->setModel("Audi");
    $myCar->setColor("Red");
    $myCar->setSpeed("75");
    $myCar->displayDetails();