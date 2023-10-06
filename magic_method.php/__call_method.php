<?php
// class MyClass {
//     public function __call($name, $arguments) {
//         echo "Calling method '$name' with arguments: " . implode(', ', $arguments) . "\n";
//     }
// }

// $obj = new MyClass();

// $obj->myMethod1(1, 2, 3); // Calls __call()
// $obj->myMethod2('A', 'B'); // Calls __call()
// $obj->myMethod3('B', 'C'); // Calls __call()

// // Calling method 'myMethod1' with arguments: 1, 2, 3
// // Calling method 'myMethod2' with arguments: A, B

class student{
    private $firstName;
    private $lastName;
    
    private function setName($fName,$lName){
        $this->firstName=$fName;
        $this->lastName=$lName;
    }
    public function __call($name, $arguments)
    {
        echo "student firstname is $name and ";
        print_r($arguments);
        print_r($name);
    }
}

$student_obj = new student();
$student_obj->setName("rasel","rana");