<?php
class MyClass {
    // Properties (variables)
    public $property1;
    public $property2;

    // Constructor method
    public function __construct($value1, $value2) {
        $this->property1 = $value1;
        $this->property2 = $value2;
       
    }

    // Methods (functions)
    public function myMethod() {
        echo "This is a method.";
    }

    private function privateMethod() {
        echo "This is a private method.";
    }
}
$Class= new MyClass(1,2);
        echo $Class->property1;
        echo $Class->property2;
$Class->myMethod();

?>

