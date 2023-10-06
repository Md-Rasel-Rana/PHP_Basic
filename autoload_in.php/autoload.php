<?php
// // Define an autoloader function
// function myAutoloader($class_name) {
//     $class_file = __DIR__ . '/' . $class_name . '.php';
//     if (file_exists($class_file)) {
//         include_once $class_file;
//     }
// }

// // Register the autoloader function
// spl_autoload_register('myAutoloader');

// // Now, when you create an instance of a class, PHP will attempt to autoload it
// $obj = new first(); // If MyClass.php exists, it will be included
// $obj = new second(); // If MyClass.php exists, it will be included
function myAutoloader($myclassname){
    $class_file = __DIR__.'/'.$myclassname. '.php';
    if(file_exists( $class_file )){
        include_once $class_file;
    }
}
spl_autoload_register("myAutoloader");

$myfirst= new first();