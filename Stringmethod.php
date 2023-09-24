<?php 

$string = "Hello World";
$fruits = ["apple", "banana", "orange"];



// echo substr("Hello world",0,12)."<br>";
echo substr("Hello world",0)."<br>";
echo substr("Hello world",3)."<br>";
echo substr("Hello world",7)."<br>";
echo $fruits[1];

echo $string[6]; 
echo substr($string,6,5); //H
echo substr($string,0,5); //Hello
echo substr($string,2);

////find last 5 characters
$lenght = strlen($string);
$startingPosition = $lenght - 5;
echo substr($string,$startingPosition);

//// smart way
echo substr($string,-5);


echo strlen($string);
$lenght = strlen($string);
for($i=0;$i<$length;$i++){
    echo $string[$i];
}

//code smell