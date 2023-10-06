<?php

// class MyClass {
//     public $property1;
//     public $property2;
// }

// // Create an instance of MyClass
// $myObject = new MyClass();

// // Set values for properties
// $myObject->property1 = 'Value 1';
// $myObject->property2 = 'Value 2';

// // Print the values before unsetting
// echo "Before unset:\n";
// echo "property1: " . $myObject->property1 . "\n";
// echo "property2: " . $myObject->property2 . "\n";

// // Unset property1
// unset($myObject->property1);

// // Print the values after unsetting
// echo "After unset:\n";
// if (isset($myObject->property1)) {
//     echo "property1.1: " . $myObject->property1 . "\n";
// } else {
//     echo "property1 has been unset.\n";
// }
// //echo "property1: " . $myObject->property1 . "\n";
// echo "property2: " . $myObject->property2 . "\n";




class MyClass {
    public $property1;
    public $property2;

    public function __construct($value1, $value2) {
        $this->property1 = $value1;
        $this->property2 = $value2;
    }
    function __unset($name)
    {
        unset($this->$name);
    }




}

$obj = new MyClass("Value 1", "Value 2");
unset($obj->property1);
echo $obj->property2;

// // Access and print the properties before unsetting
// echo "Before Unset:\n";
// echo "Property 1: " . $obj->property1 . "\n";
// echo "Property 2: " . $obj->property2 . "\n";

// // Unset property1
// unset($obj->property1);

// // Access and print the properties after unsetting
// echo "After Unset:\n";
// if (isset($obj->property1)) {
//     echo "Property 1 is set.\n";
// } else {
//     echo "Property 1 is not set.\n";
// }
// echo "Property 2: " . $obj->property2 . "\n";
