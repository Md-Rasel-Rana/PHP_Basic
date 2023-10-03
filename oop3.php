<?php
// class myclass{
//     private $name;
//     private $age;
//     private $class;
//      function __construct($name, $age, $class)
//      {
//         $this->name = $name;
//         $this->age = $age;
//         $this->class = $class;
//      }

//          public function __get($prop){
//           return strtoupper($this->$prop);

//          }

//     //  function setname($name){
//     //     $this->name=$name;
//     //  }
//     //  function getname(){
//     //    return $this->name;
//     //  }

//     //  function setage($age){
//     //     $this->age = $age;
//     //  }
//     //  function getage($age){
//     //     $this->age = $age;
//     //  }

    
// }

// $myobj=new myclass("rasel","28",10);
// echo $myobj->name;


// class Test{
//     private $user = [
//         "name" => "John",
//         "age" => 22,
//         "email" => "john@gmail.com",
//         "gender" => "Male"
//     ];

//     function __get($var_name){
//         if(isset($this->user[$var_name])){
//             return $this->user[$var_name]; 
//         }
//         return "\nSorry, the property \"{$var_name}\" does not exist.\n";        
//     }
// }

// $obj = new Test();
// echo $obj->name;
// echo $obj->phone;
// echo $obj->email;


//// using traits of oop 
//  trait myclass{
//     function msg1(){
//         echo " i am a oop right now";
//     }
//     function msg2(){
//         echo " i am a oop msg  22 right now";
//     }
//  }
//  trait myclass2{
//     function msg3(){
//         echo " i am a my class 2 right now ";
//     }
//     function msg4(){
//         echo "i am a my class 2 and 2nd fuction ";
//     }
//  }
//  class welcome{
//     use myclass,myclass2;
//  }

//  $myobj=new welcome();
//  $myobj->msg1();
//  echo PHP_EOL;
//  $myobj->msg2();
//  echo PHP_EOL;
//  $myobj->msg3();
//  echo PHP_EOL;
//  $myobj->msg4();

//  function myfun(iterable $value){
//     foreach( $value as $item){
//         echo $item;
//     }
//  }
// $myarr=array("volvo","bmw","btv","php");
//  myfun($myarr);

function myfun():iterable{
    return ["volvo","bmw","btv","php"];
   
 }

 $myarr=myfun();
 foreach( $myarr as $item){
    echo $item;
}

