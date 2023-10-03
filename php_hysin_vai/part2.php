<?php

/*
Constructor
1.Method that gets executed whenever an object is instantiated from a class
2.The constructor method has a magic name: __construct.
*/

use Fruit as GlobalFruit;

class Car {

    public function __construct() {
        $num1=10;
        $num2=20;
        echo $num1+$num2;
    }
}

$myCar = new Car();
echo  PHP_EOL ;

 
