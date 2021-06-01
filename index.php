<?php

require_once __DIR__ . '/Desktop.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/Laptop.php';
require_once __DIR__ . '/User.php';

// desktop instance
$desktopPc = new Desktop('Gaming', '2000');
$desktopPc->brand = 'Asus';
$desktopPc->morherboard = 'MSI A750GF';
$desktopPc->ram = 'Vengeance DDR4 3.600 MHz';
$desktopPc->cpu = 'Intel Core i7-11700KF';
$desktopPc->gpu = 'RTX 3070';
$desktopPc->storage = 'SSD 1000';
$desktopPc->setShippingPrice();

// smartphone instance 
$iPhone = new Smartphone('iPhone', '1289');
$iPhone->brand = 'Apple';
$iPhone->model = 'iPhone 12';
$iPhone->color = 'Silver';
$iPhone->storage = '128';
$iPhone->setShippingPrice();

// laptop instance
$macbook = new Laptop('MacBook Pro 13', '1709');
$macbook->brand = 'Apple';
$macbook->ram = '8';
$macbook->cpu = 'M1 8-core';
$macbook->storage = '512';
$macbook->setShippingPrice();

// user instance
$user = new User('Mario', 'Rossi');
$user->addProduct($iPhone);
$user->addProduct($desktopPc);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>
        <h1>Order Summary</h1>
        <ul>
            <?php foreach ($user->getProducts() as $product) { ?>
                <li>Product Name: <?php if ($product instanceof Desktop || $product instanceof Laptop || $product instanceof Smartphone) {echo $product->model;} else {echo $product->name;} ?></li>
                <li>Price: <?php echo $product->price; ?>€</li>
                <li>Shipping Time: <?php echo $product->shippingTime; ?> Days</li>
                <li>Shipping Price: <?php echo $product->shippingPrice; ?> €</li>
                <li>TOTAL: <?php echo $product->price + $product->shippingPrice; ?> €</li>
                <br>
            <?php } ?>
        </ul>
    </div>

</body>
</html>