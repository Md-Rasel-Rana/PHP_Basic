<?php

class MyClass {
    public $property1;
    public $property2;
    private $property3;

    public function __construct($value1, $value2, $value3) {
        $this->property1 = $value1;
        $this->property2 = $value2;
        $this->property3 = $value3;
    }

    public function __sleep() {
        // Return an array of property names to be serialized
       return array("property1","property2","property3");
    }
}

$obj = new MyClass("Value 1", "Value 2", "Value 3");

// Serialize the object using serialize()
$serialized = serialize($obj);
echo $serialized;

// // Unserialize the object using unserialize()
// $unserialized = unserialize($serialized);

// // Access the properties after unserialization
// var_dump($unserialized);
