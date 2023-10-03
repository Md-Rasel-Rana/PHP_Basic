<?php


/*
Class & Object
1. Class allow developers to encapsulate related data and functions into a single entity.
2. making it easier to manage and extend code
3. An object is an instance of a class. You create an object of a class using the new keyword.
*/

class Car {

    public $color = "red";    
    
    public function drive() { 
        echo "Car is driving!";
    }
}

$myCar = new Car();
echo $myCar->color; 
$myCar->drive();
 echo PHP_EOL;


