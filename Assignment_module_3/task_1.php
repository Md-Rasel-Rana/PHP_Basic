<?php

$text="The quick brown fox jumps over the lazy dog.";

    function task_1($text){
             return strtolower($text);

    }
    $convert_lower = task_1($text); 
    echo $convert_lower;

   echo PHP_EOL;
    function task_1_modify($text){
             return str_replace("brown", "red" , $text);
    }
    $convert = task_1_modify($text); 
    echo $convert;


   
