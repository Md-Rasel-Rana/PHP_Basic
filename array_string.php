<?php 
// $string = "Hello World";
// $anotherString = 'Hello World';

$firstName = "RASEL";
$lastName = "RANA";

// echo "Hello $firstName \n";
// echo "Hello {$firstName}\n"; //best practice

// ////trail code here 
// $stingtxt="hello my name is";
// $fistname="rasel";
// $lastname="rana";
// echo "{$stingtxt} {$fistname} {$lastname}";


$fruit = "apple";
echo "I have 5 $fruit"."s";
echo "I have 5 {$fruit}s";

// echo "First Name: $firstName \nLast Name: $lastName \nDesignation: Developer";

///heredoc
// $longText = <<<ABCD
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;

// ////trail code here 
//  echo $longtext = <<<RANA
//  Firstname = {$firstName}
//  lastname = {$lastName}
//  Designation: Developer 
//  RANA;


//  $str = <<<IDENTIFIER
//  place a string here
//  it can span multiple lines
//  and include single quote ' and double quotes "
//  IDENTIFIER;
//  echo $str;

//nowdoc
// $longText = <<<'ABCD'
// First Name: {$firstName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;
// echo $longText;

$fullName = $firstName ." ".$lastName; //concatenation concatenate
// $fullName = "{$firstName} {$lastName}";
echo $fullName;
