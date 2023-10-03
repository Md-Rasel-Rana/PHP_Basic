<?php
////assignment module-04
class Product {
    private $id;
    private $name;
    private $price;

    // Constructor to initialize the properties
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to get the formatted price
    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "ID: " . $this->id . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example pass the value or instance create to here :
$product = new Product(1, "T-Shirt", 19.99);
$product->showDetails();

