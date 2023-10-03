<?php


/*
Inheritance
1.Inheritance sets up a "like parent, like child" relationship between classes.
2.Instead of rewriting code, the child class can reuse or change what it gets from the parent.
3.One class (the child) can use everything from another class (the parent).
*/


// class Father {
//     public function print100() {
//        for($i=0;$i<=100;$i++){
//         echo "$i <br/>";
//        }
//     }
// }

// class Son extends Father {
// }

// $SonObject = new Son();
// $SonObject->print100();





//========================================================================



/* Overriding Methods
1. Subclasses can override inherited methods from the superclass.
*/



// class Father {
//     public function print100() {
//        for($i=0;$i<=100;$i++){
//         echo "$i <br/>";
//        }
//     }
// }

// class Son extends Father {
//     public function print100() {
//         for($i=0;$i<=80;$i++){
//          echo "$i <br/>";
//         }
//      }
// }

// $SonObject = new Son();
// $SonObject->print100();





//========================================================================

/* parent Keyword:
1. You can call the parent class's method using the parent keyword.
*/


// class Father {
//     public function print100() {
//        for($i=0;$i<=100;$i++){
//         echo "$i <br/>";
//        }
//     }
// }

// class Son extends Father {

//     public function CallFromFather() {
//         parent::print100();
//     }
// }

// $SonObject = new Son();
// $SonObject->CallFromFather();





//========================================================================





/* Abstract Classes:
1. Abstract classes cannot be instantiated on their own but can be subclassed
*/



// abstract class Father {
//     public function print100() {
//        for($i=0;$i<=100;$i++){
//         echo "$i <br/>";
//        }
//     }
// }

// class Son extends Father {
// }

// $SonObject = new Son();
// $SonObject->print100();




//========================================================================



/* Final Keyword:
1. If you declare a class as final, it means it cannot be extended (inherited).
2. If you declare a method as final, it means it cannot be overridden by a subclass.
*/

/*
final class Father {
    final  public function print100() {
       for($i=0;$i<=100;$i++){
        echo "$i <br/>";
       }
    }
}

class Son extends Father {
    public function print100() {
        for($i=0;$i<=80;$i++){
         echo "$i <br/>";
        }
     }
}

*/






//========================================================================



/* Constructors and Inheritance: 
1. If a child class has its own constructor, the parent class's constructor will not be automatically called. 
2. Use parent::__construct() if you want to explicitly call the base class's constructor.
*/

/* 
class Father {
    public function __construct() {
        echo "Father constructor";
    }
}

class Son extends Father {
    public function __construct() {
        parent::__construct();
       echo " and Son constructor";
    }
}

$newObj = new Son(); 

*/