<?php
class MyClass {
    public function doSomething() {
        echo "Doing something...\n";
    }
    public function noSomething() {
        echo "Doing nosomething...\n";
    }
}

// Create an instance of MyClass
$obj = new MyClass();
$obj->doSomething();
$obj->noSomething();
// Check if the method 'doSomething' exists in the object
if(method_exists($obj,"noSomething")){
    echo "method is exists";
}
else{
    echo "not exists";
}