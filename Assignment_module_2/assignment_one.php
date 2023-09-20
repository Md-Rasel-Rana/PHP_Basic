<?php

//Task 1: Looping with Increment using a Function
// using  for loop
function myfunction($T){
    for($r=0; $r<$T; $r++){
        if($r%2==0){
            echo "even number = $r";
        }
        echo "<br>";
    }
}
myfunction(20);

//// using  do while loop
function myfunction2($d){
    $x = 1;

    do {
        if($x%2==0){
        echo "even number = $x";
        }
       $x++;
       echo "<br>";

    } while ($x<$d);
  
}
myfunction2(20);


//// using while loop
function myfunction1($n){
    $i=0;
while($i <= $n){
    if($i % 2 == 0){
        echo $i." - Even,  ";
    }
    $i++;
}

}






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