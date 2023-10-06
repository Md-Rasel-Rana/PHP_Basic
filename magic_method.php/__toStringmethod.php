<?php
//  class cat {
//     public function __toString() {
//         return "This is a cat\n";
//     }
// }

// $toby = new cat;
// print $toby;

// class Assets{

//     protected 
//       $queue = array();
  
//     public function add($script){
//       $this->queue[] = $script;
//     }
  
//     public function __toString(){    
//       $output = '';    
//       foreach($this->queue as $script){
//         $output .= '<script src="'.$script.'"></script>';
//       }    
//       return $output;
//     }
  
//   }
  
  
//   $scripts = new Assets();
//   echo $script->add("value");

class MyClass {
  private $data;
  private $number;

  public function __construct($data,$number) {
      $this->data = $data;
      $this->number = $number;
  }

  public function __toString() {
      return "Data: " . $this->number.' '.$this->data;
  }
}

$obj = new MyClass("Hello, World!",1511056127);

// When you use echo or print on $obj, __toString() is automatically called
echo $obj; // Output: Data: Hello, World!
