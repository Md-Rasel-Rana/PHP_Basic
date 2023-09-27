<?php 

// $string = "Hello World";
// $fruits = ["apple", "banana", "orange"];



// // echo substr("Hello world",0,12)."<br>";
// echo substr("Hello world",0)."<br>";
// echo substr("Hello world",3)."<br>";
// echo substr("Hello world",7)."<br>";
// echo $fruits[1];

// echo $string[6]; 
// echo substr($string,6,5); //H
// echo substr($string,0,5); //Hello
// echo substr($string,2);

// ////find last 5 characters
// $lenght = strlen($string);
// $startingPosition = $lenght - 5;
// echo substr($string,$startingPosition);

// //// smart way
// echo substr($string,-5);


// echo strlen($string);
// $lenght = strlen($string);
// for($i=0;$i<$length;$i++){
//     echo $string[$i];
// }

//code smell




// $condition = 0; //false
// if($condition){
//     echo "Done";
// }


// $string = "PHP & Laravel Course From Ostad";
// $needle = "PHP";
// $position = strpos($string,$needle); 
// echo $position;

// if($position !== false){ //particularly important for strpos
//     echo "Found";
// }else{
//     echo "Not Found";
// }


//print_r($student["age"]);
// $student=array('name' => 'Alice', 'age' => 22, 'grade' => 'A');

// if (array_key_exists("grade",$student))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }

//   $numbers =array(100, 200, 50, 40, 50);
//   foreach($numbers as $values){
//      echo $values.PHP_EOL;
//   }

//   $names=array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin','Moni');
//   function test_odd($var){
//     if($var=='Moni'||$var=='Mashrufa'||$var=='M' ){
//         return "Start letter M";
//     }
//   }
// print_r(array_filter($$names,"test_odd"));
// $names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

// function findletter($name)
// {
//     return substr($name, 0, 1) === "M";
// }
// $filteredNames = array_filter($names, 'findletter');
// foreach ($filteredNames as $name) {
//     echo $name . "\n";
// }

// function filter($value){
//     return  $value[0]=='M';
//    }
//   echo  $filter_name =array_filter($names,'filter');


// $originalString = "Hello World";
// echo strrev($originalString);

// $fruits = ['apple', 'banana', 'cherry'];
// //  echo $fruits->push('orange');
// // echo $ftt= array_add($fruits, 'orange');
// $fruits[] = 'orange';
// print_r($fruits);
// $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

// echo json_encode($age);
// Example array
// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// // Filter out even numbers using a callback function
// $filteredNumbers = array_filter($numbers, function ($value) {
//     return $value % 2 == 0;
// });

// print_r($filteredNumbers);
$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

// Define a callback function to filter names starting with 'A'
function startsWithA($name) {
    return substr($name, 0, 1) === 'M';
}

// Use array_filter to filter the array
$filteredNames = array_filter($names, 'startsWithA');

// Output the filtered names
print_r($filteredNames);


