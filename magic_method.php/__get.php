<?php
// class MyClass {
// private $data=[];

//  function __get($name){
//     if(isset($this->data[$name])){
//         return $this->data[$name];
//     }
//     return null;
//  }
// }

// $obj = new MyClass();

// $obj->rasel = "Value 1"; // Assign a property
// $obj->rasel2 = "Value 2"; // Assign a property
// $obj->rasel3="Value 3"; // Assign a property
// $obj->rasel4="Value 4"; // Assign a property

// echo $obj->rasel . "\n"; // Access the property using __get()
// echo $obj->rasel2 . "\n"; // Access the property using __get()
// echo $obj->rasel3 . "\n"; // Access the property using __get()
// echo $obj->rasel3 . "\n"; // Access the property using __get()
// print_r($obj);

// class MyClass {
//     private $myProperty;
//     private $myProperty1;

//     public function __construct($initialValue,$initialValue1) {
//         $this->myProperty = $initialValue;
//         $this->myProperty1 = $initialValue1;
//     }

//     public function getMyProperty() {
//         return $this->myProperty;
//     }
//     function __get($name){
//         if(isset($this->$name)){
//             return $this->$name;
//         }
//         return null;
//     }
// }

// // Create an instance of MyClass
// $obj = new MyClass("Initial Value 0","Initial Value1");
// echo $obj->myProperty;
// echo $obj->myProperty1;
// echo $obj->myProperty3;
// // Get the value of myProperty using the getter method
// //$propertyValue = $obj->getMyProperty();

// // Output the value
// //echo "myProperty: " . $propertyValue . "\n";

use myclass as GlobalMyclass;

class myclass{

    private $name;

    function __get($name){
        echo "hello assign here to property not set to value $name";
    }
   function __set($name, $value){
    return $this->$name=$value;
   }
}

$myobject= new GlobalMyclass();
echo $myobject->name="hello rasel";
echo $myobject->fname="hello Jon";
echo $myobject->lname="hello jony singh";


