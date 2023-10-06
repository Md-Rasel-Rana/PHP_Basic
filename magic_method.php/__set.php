<?php
            ///problem finding here..........
// class User
// {
//   private $data = array();

//   private $name;
//   protected $age;
//   public $salary;

//   public function __set($name, $value)
//   {
//     $this->data[$name] = $value;
  
//   }
// }

//  $user = new User();
//  $user->name = 'John';
//  $user->age = '29';
//  $user->salary = 'Rahim';
// print_r($user);


 ///problem finding here..........
// class MyClass {
//     private $data = [];

//     public function __set($name, $value) {
//         echo "Setting $name to $value\n";
//         $this->data[$name] = $value;
//     }

//     public function __get($name) {
//         if (isset($this->data[$name])) {
//             return $this->data[$name];
//         }
//         return null;
//     }
// }

// $obj = new MyClass();

// $obj->property1 = "Value 1"; // Calls __set()
// $obj->property2 = "Value 2"; // Calls __set()

// echo $obj->property1 . "\n"; // Calls __get()
// echo $obj->property2 . "\n"; // Calls __get()

// use myclass as GlobalMyclass;

// class myClass{
//     private $data = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
//     // public function sayHello(){
//     //     echo "my name is $this->name";
//     //  }

//         function __get($key){
//             if(array_key_exists($key,$this->data)){
//                 return $this->data[$key];
//             }else{
//                 return "user is not define $key";
//             }
       
//         }
//     }
// $myobject = new GlobalMyclass();
// echo $myobject->Peter;
// print_r($myobject);

// class myclass{
//     private $name = "rasel rana";
//     function __get($name){
//         if(property_exists(__CLASS__,$name)){
//             return $this->$name;
//         }
//         return "\nSorry, the property \"{$name}\" does not exist.\n"; 
//     } 
// }
// $myobject = new myclass();
// echo $myobject->name;
// echo $myobject->age;

class MyClass {
    private $data = [];

    public function __set($name, $value) {
        echo "Setting $name to $value\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }
}

$obj = new MyClass();

$obj->property1 = "Value 1"; // Calls __set()
$obj->property2 = "Value 2"; // Calls __set()

echo $obj->property1 . "\n"; // Calls __get()
echo $obj->property2 . "\n"; // Calls __get()
