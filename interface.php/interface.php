<?php
class myinterface implements IteratorAggregate{
    private $district;
     function __construct(){
        $this->district=array();

     }

     public function add($district){
      array_push($this->district,$district);
     }

     public function getdata(){
     return $this->district;
     }

    function getIterator(): Traversable
    {
      return new ArrayIterator($this->district);
    }
}
$myclass=new myinterface();
$myclass->add("rajshai");
$myclass->add("dhaka");
$myclass->add("bogura");
// $mydata=$myclass->getdata();
// print_r($mydata);
foreach($myclass as $item){
    echo $item;
}