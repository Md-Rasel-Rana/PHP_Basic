<?php
//// EVEN NUMBER OUTPUT
function myfunction($n){

    $i=0;
    while($i <= $n){
        if($i % 2 == 0){
            echo $i." - Even,  ";
        }
        $i++;
    }
}
myfunction(20);

///Task 2: Skip Multiples of 5
for($x=0; $x<50; $x++){
    if($x==5){
     continue;
    }
    echo $x*$x;
    echo PHP_EOL;

}


//Task 3: Break on Condition
$n1=0;
$n2=1;
$sum=0;

for($i=0; $i<20; $i++){
echo $n1 = $n1 + $n2;
$n2= $sum;
$sum= $n1;
 echo "<br>";
 if($sum == 100){
    break;
}
} 

//Task 4: Fibonacci Series printing using a Function
  function myfibo($num){
    $n1=0;
    $n2=1;
    $sum=0;

for($i=0; $i<$num; $i++){
    echo $n1 = $n1 + $n2;
    $n2= $sum;
    $sum= $n1;
     echo "<br>";
     if($n1 === 100){
        break;
    }
} 
  }
  myfibo(15);