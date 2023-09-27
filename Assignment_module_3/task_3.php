<?php

$grades =[85,92,78,88,95];
 function tast_3_Decending($grades){
  rsort($grades);
 return $grades;
 }

 $result=tast_3_Decending($grades);
 print_r($result);