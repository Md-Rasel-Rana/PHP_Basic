<?php
// class myruinfo{
//     public $name ;
//     public $password;
// }
// $myclass= new myruinfo();

// $myclass->name = "rasel rana";
// $myclass->password = 1511056127;

// $copy = $myclass;

// print_r($copy);



class SubObject
{
    static $instances = 0;
    public $instance1;

    public function __construct() {
        $this->instance1 = ++self::$instances;
    }

    public function __clone() {
        $this->instance1 = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);