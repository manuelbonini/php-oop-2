<?php
class User {
    public $name; // name of user
    public $lastname; // lastname of user

    protected $products = []; // products select by user

    public function __construct($name, $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }
}
?>