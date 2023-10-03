<?php




/*
Static Properties
1. Static properties are tied to the class, not an instance of the class. 
2. They can be accessed without creating an instance of the class.
*/

/*
class MyClass {
    public static $staticProperty = "Static Property";
}
echo MyClass::$staticProperty;  // Outputs: Static Property
*/


//========================================================================


/*
Static Methods
1.Just like static properties, static methods are accessed without creating an instance of the class
2.They are often used as utility functions that do not rely on any instance-specific data
*/

/*
class MyClass {
    public static function staticMethod() {
        echo "Static Method";
    }
}

MyClass::staticMethod();
*/

//========================================================================


/*
Accessing Static Properties Inside Class Methods
1.Within class methods, static properties and methods are accessed using the self keyword followed by the scope resolution operator
*/

class MyClass {
    public static $value = "Static Value";

    public static function showValue() {
        echo self::$value;
    }
}

MyClass::showValue();