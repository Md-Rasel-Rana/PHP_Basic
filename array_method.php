<?php


// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,2));


////Get The Length of an Array - The count() Function

// $cars = array("Volvo", "BMW", "Toyota");
//   echo count($cars);
//   echo $cars[0].$cars[1].$cars[2];

//   echo PHP_EOL;
//   //// using foreach loop here 
//   foreach( $cars as $value){
//      echo $value;
//   }
//    //// using for loop here 
//     echo PHP_EOL;
//    for($i=0; $i<count($cars); $i++){
//        echo" for loop = $cars[$i]";
//    }


////PHP Associative Arrays
//    $myarr=array("firstname"=>"rasel","lastname"=>"rana", "age"=>27,"profession"=>"wordpress developer");
//   echo $myarr['firstname'].$myarr['age'].$myarr['profession'];


//   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Rasel is " . $age['Peter'] . " years old.";

// foreach($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
//   }


  ////PHP Multidimensional Arrays
//   $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );
//   echo $cars[0][0].$cars[1][0].$cars[2][2].$cars[2][1].$cars[3][0];



  //// sort() - sort arrays in ascending order
//   $cars = array("Volvo", "BMW", "Toyota");
//     sort($cars);

//     $clength = count($cars);
// for($x = 0; $x < $clength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// $numbers = array(4, 6, 2, 22, 11);
//  sort($numbers);
//  $arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $numbers[$x];
//   echo "<br>";
// }
////PHP array_push() Function

// $myarr =array("red","green");
//  array_push($myarr,"blue","violet");

// print_r($myarr);

// $a=array("a"=>"red","b"=>"green");
// array_push($a,"violet","akashi");
// print_r($a);

// $mycars = array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota",5=>"5");
// print_r(array_shift($mycars));
// print_r($mycars); 




////PHP array_product() Function
// $mynumber=array(5,5,54,23,45,56,76,75,43,23);
//  print_r(array_product($mynumber));


 ////PHP array_map() Function

//  function myfunction($num){
//    return $num*$num;

//  }
//  $a=array(1,2,3,4,5);
//  print_r(array_map("myfunction",$a));


////PHP array_chunk() Function
// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,3));



/////PHP array_pop() Function

// $colorname=array("red","green","blue");
// array_pop($colorname);
// print_r($colorname);


//// PHP array_unshift() Function

// $arr=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
//   // array_unshift($arr,"blue","yellow");
//   // print_r($arr);
//   print_r( array_values($arr));


////PHP end() Function
// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people) . "<br>";
// echo end($people);


////PHP in_array() Function
// $people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

// if (in_array(235, $people, TRUE))
//   {
//   echo "Match found<br>";
//   }
// else
//   {
//   echo "Match not found<br>";
//   }
// if (in_array("Glenn",$people, TRUE))
//   {
//   echo "Match found<br>";
//   }
// else
//   {
//   echo "Match not found<br>";
//   }

// if (in_array(23,$people, TRUE))
//   {
//   echo "Match found<br>";
//   }
// else
//   {
//   echo "Match not found<br>";
//   }




////PHP current() Function

// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo current($people) . "<br>";

// $SUM=array(5,15,25,45,23,34,97);
// echo array_sum("SUM ="+$SUM);


////PHP array_reduce() Function

// function myfunction($v1,$v2)
// {
// return $v1 . "-" . $v2;
// }
// $a=array("Dog","Cat","Horse");
// print_r(array_reduce($a,"myfunction"));

////PHP fscanf() Function

//  $student=[
//   "12"=>"hasan ",
//   "13"=>"khan",
//   "14"=>"rasel"
//  ];
// //  echo $student["13"];
//  $key =array_keys($student);
//   $value=array_values($student);

// ///// PHP array_keys() / values Function
// print_r($key);
// print_r($value);


$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_filter($a));


///PHP array_merge() Function  ***Merge two arrays into one array:

// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_merge($a1,$a2,$a));


/////PHP array_diff() Function

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// $result=array_diff($a1,$a2);
// print_r($result);

//PHP explode() Function
// $str = "Hello world. It's a beautiful day.";
// $join=(explode(" ",$str));
// print_r(join($join));

//PHP join() Function
$arr = array('Hello','World!','Beautiful','Day!');
$join= join(", ", $arr);
 print_r($join);

 













