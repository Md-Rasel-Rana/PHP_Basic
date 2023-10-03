<?php




/*
Access modifiers
Access modifiers control the visibility of class properties and methods
1. public – accessible everywhere
2. protected – accessible within the class and its subclasses (inheritance)
3. private – accessible only within the class itself
*/

class Fruit {
    public $color;           // Can be accessed anywhere
    protected $taste;        // Can be accessed within this class and derived classes
    private $origin;         // Can be accessed only within this class

    public function setTaste($taste) {
        $this->taste = $taste;
    }

    public function setOrigin($origin) {
        $this->origin = $origin;
    }

    public function describe() {
        echo "This fruit is " . $this->color . " and tastes " . $this->taste . " from " . $this->origin . ".\n";
    }
}

class Apple extends Fruit {
    public function revealTaste() {
        return $this->taste;  // Allowed because $taste is protected
    }

    // This function will generate an error if uncommented
    // public function revealOrigin() {
    //     return $this->origin;  // Error, as $origin is private to Fruit
    // }
}

$apple = new Apple();
$apple->color = "red";
$apple->setTaste("sweet");
$apple->setOrigin("Washington");

$apple->describe();  // This fruit is red and tastes sweet from Washington.

echo $apple->revealTaste();  // Outputs: sweet

// Uncommenting the following line would produce an error
// echo $apple->revealOrigin();

