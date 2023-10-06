<?php


////oop basic
// class Fruit{
//     ////propertise
//     public $name;
//     public $color;
     
//     function set_name($name){
//         $this->name=$name;
//     }
//     function set_name_color($color){
//         $this->color=$color;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function get_name_color(){
//         return $this->color;
//     }

// }


// $appple=new Fruit();
// $banana=new Fruit();
// $appple->set_name("rasel");
// echo $appple->get_name();
// $banana=new Fruit();
// $banana->set_name_color("red");
// echo $banana->get_name_color();
class Fruit {
    public $name;
    public $color;
  
    function __construct($name,$color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
      
    }
    function get_color() {
      return $this->color;
      
    }
  }
  
  $apple = new Fruit("Apple","red");
  echo $apple->get_name();
  echo $apple->get_color();













  ?>
  





