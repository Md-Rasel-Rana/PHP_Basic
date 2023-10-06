<?php
// class MyClass {
//     public $property1;
//     public $property2;
// }

// // Create an instance of MyClass
// $myObject = new MyClass();

// // Set a value for property1
// $myObject->property1 = 'Value 1';
// $myObject->property2 = 'Value 2';

// // Check if property1 exists in the object
// if (isset($myObject->property1)) {
//     echo "property1 exists and its value is: " . $myObject->property1 . "\n";
// } else {
//     echo "property1 does not exist.\n";
// }

// // Check if property2 exists in the object
// if (isset($myObject->property2)) {
//     echo "property2 exists and its value is: " . $myObject->property2 . "\n";
// } else {
//     echo "property2 does not exist.\n";
// }


class MyClass {
    public $property;
    private $fname;
    private $lname;

    function setName($fn, $ln){
        $this->fname = $fn;
        $this->lname = $ln;
     }

    function __isset($name)
    {
        return isset($this->$name);
    }
}

$obj = new MyClass();
$obj->setName("Rana", "Bana");
$obj->property="land value";
if (isset($obj->property)) {
    echo "fname property is set\n";
} else {
    echo "lname property is not set\n";
}

