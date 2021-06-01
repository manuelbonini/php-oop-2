<?php

class Product {
    public $name;   // name of product

    public $brand;  //brand of product

    public $price;  // price of product

    public $shippingPrice = 50;  // price of shipping (defoult set to 50)

    public $shippingTime = 3;  // time to ship (default set to 3)

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // function to set shipping price
    public function setShippingPrice() {
        if ($this->price > 200) {
            $this->shippingPrice = 0;
        }
    }

    // function to get info of product
    public function getInfoData() {
        return [
            'name' => $this->name,
            'brand' => $this->brand,
            'price' => $this->price,
            'shipping_price' => $this->shippingPrice,
            'shipping_time' => $this->shippingTime
        ];
    }
}

?>