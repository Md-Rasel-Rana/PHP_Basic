<?php
// class user{
//     public $name;
//     public $username;
//     public $password;

//    public function __construct($name,$username,$password){
//         $this->name = $name;
//         $this->username= $username;
//         $this->password= $password;
//     }

//     public function myfunction1(){
//         echo "my name is $this->name and my user id name is $this->username then my password is $this->password ";
//     }

//     public function myfunction(){
//         echo "my name is $this->name and my username $this->username and password $this->password ";
//     }

// }
//  class password extends user{
//     function myfun(){
//         echo " my name is $this->name";
//     }
//  }

// $obj=new user("hello rasel rana","rasel127",15110561227);
// $myobj=new user("rabbil hasan","useridNam2023",5104677777);
// $mybj=new user("hasin hyder","useridNam2001php",61087878878);
// $myobj->myfunction1();
// echo PHP_EOL;
// $obj->myfunction();
// echo PHP_EOL;
// $mybj->myfunction1();

// //// inheritance of user class here 
// $my2ndobj= new password("rubel rana","rubel127",51210561227);
// $my2ndobj->myfun();


// class Car{
//     public $name;
//     public $model;
//     public $orgin;
//     public function __construct($name,$model,$orgin){
//         $this->name = $name;
//         $this->model = $model;
//         $this->orgin = $orgin;
//     }
//      public function myfun2(){
//         echo " car name is $this->name and car model is  $this->model and origin is  $this->orgin";
//      }

//      public function myfun3($a,$b){
//         echo $a*$b;
//      }
// }

//  $myobj = new Car("toyota","23023","usa");
//  $myobj-> myfun2();
//   echo PHP_EOL;
//  $myobj-> myfun3(24,90);

//   class Father{
//     public function myadd_100(){
//         for($x=0; $x<100; $x++){
//             echo $x.PHP_EOL;
//         }
//     }
//   }
// // //// inheritance of user class here 
//  class Son extends Father{
     
//     public function mysonfun(){
//         parent::myadd_100();
//     }
//  }
//  $myobj= new Son();
//  echo PHP_EOL;
//  $myobj-> mysonfun();




//  class myparentcls{
//   public function myprentfun(){
//         echo "my name is rasel rrana";
//     }
//      public function myfun(){}
//   }

//  class child extends myparentcls{

//     public function myprentfun(){
//         echo "my name is rasel rana id 1511056127";
//     }


//     public function myfun(){
//         echo "rana";
//     }

//  }
 
//  $obj=new child();
//  $obj->myprentfun();
//  $obj->myfun();




////static method here to call 
// class A {
//   static public function myfun(){
//         echo "my name is rasel rana";
//     }
// }

// class B extends A {
//     public function myfun1(){
//         echo "my name is rubel rana";
//     }

// }
// $b=new B();
// A::myfun();
// $b->myfun1();

// class A {
//     public static function welcome() {
//       echo "Hello World!";
//     }
//   }
//  class B extends A {
//         public $webname;
//         public function myfun(){
//             $this->webname = parent::welcome();
//         }

//  }

// $tobj = new B();
// $tobj->myfun();

// define("ok","hello world");
// echo constant("ok");

// class myclass{
//     const city="Dhaka";


//     function sayHi(){
//         echo $this::city." is a best city in the world";
//     }
// }


// $obj= new myclass();
// $obj->sayHi();


// class myfun{

//     private $name;
//     private $age;
//     private $class;

//     public function __construct($name='', $age='',$class=''){
//          $this->name=$name;
//          $this->age=$age;
//          $this->class=$class;
//     }

//   function setname($name){
//         $this->name=$name;
//     }
//   function getname(){
//          return $this->name;
//     }
//   function setage($age){
//         $this->age=$age;
//     }
//   function getage($age){
//         $this->age=$age;
//     }
//   function setclass($class){
//         $this->class=$class;
//     }
//   function getclass($class){
//         $this->class=$class;
//     }

// }

// $myobj=new myfun();
// echo $myobj->setname("rana");
// echo $myobj->getname();



// function areAnagrams($word1, $word2) {
//     // Remove spaces and convert to lowercase to ensure case-insensitive comparison
//     $word1 = strtolower(str_replace(' ', '', $word1));
//     $word2 = strtolower(str_replace(' ', '', $word2));

//     // Check if the lengths of the two words are different
//     if (strlen($word1) !== strlen($word2)) {
//         return false;
//     }

//     // Count the frequency of each character in both words
//     $charCount1 = array_count_values(str_split($word1));
//     $charCount2 = array_count_values(str_split($word2));

//     // Compare the character counts
//     return $charCount1 == $charCount2;
// }

// $word1 = "listen";
// $word2 = "silent";

// if (areAnagrams($word1, $word2)) {
//     echo "$word1 and $word2 are anagrams.";
// } else {
//     echo "$word1 and $word2 are not anagrams.";
// }
// $array = array("apple", "banana", "cherry");
// $separator = " ";

// $result = join($separator, $array);

// echo $result; 


 













// $obj->myfunction("rasel","127438",1511056127);


