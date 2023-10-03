<?php

// class myclass{
//     public static function staticmethod(){
//         echo "hello world\n";
//     }


//     public function __construct()
//     {
//         self::staticmethod();
//     }
// }

//  $myclass = new myclass();

// ////another method use here 
//  class A{
//     public static function Welcome(){
//         echo "hello world A\n";
//     }
//  }

//  class B{
//     public function Welcome2(){
//         A::Welcome();
//     }
//  }
//   $myclassB = new B();
//   $myclassB->Welcome2();


//   ////PHP OOP - Static Methods
//   class domain{
//     public static function getWebsiteName(){
//      return "my website name is here \n";
//     }
//   }

//   class domain3 extends domain{
//      public $WebsiteName;
//     public function __construct()
//     {
//         $this->WebsiteName = parent::getWebsiteName();
//     }
//   }
// $myclass = new domain3();
// echo $myclass->WebsiteName;


////PHP OOP - Static Properties

class staticproperty{
    public static $staticpro = "hello world";
}
echo staticproperty::$staticpro;

class ClassName {
    public static $staticProp = "W3Schools";
  }
  echo ClassName::$staticProp;
