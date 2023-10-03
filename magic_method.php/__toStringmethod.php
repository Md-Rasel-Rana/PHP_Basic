<?php
 class cat {
    public function __toString() {
        return "This is a cat\n";
    }
}

$toby = new cat;
print $toby;

class Assets{

    protected 
      $queue = array();
  
    public function add($script){
      $this->queue[] = $script;
    }
  
    public function __toString(){    
      $output = '';    
      foreach($this->queue as $script){
        $output .= '<script src="'.$script.'"></script>';
      }    
      return $output;
    }
  
  }
  
  
  $scripts = new Assets();
  $script->add();