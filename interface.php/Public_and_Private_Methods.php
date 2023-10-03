<?php
class myclass{
    private $fund;
     public function __construct($initialvalue=0){
        $this->fund=$initialvalue;
     }
   public function addfund($money){
     $this->fund+= $money;
      }
      public function deductfund($money){
     $this->fund-= $money;
      }
  public function getdata(){
    echo "total fund is $this->fund ";
  }

}

$myobj= new myclass(100);
// $myobj->fund=200;
$myobj->getdata();
$myobj->addfund(13);
$myobj->getdata();
$myobj->deductfund(10);
$myobj->getdata();