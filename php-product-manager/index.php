<?php
include_once "Models/Product.php";
include_once "Services/Product-Manager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop", 20));
$productManager->add(new Product("Mobile", 15));

$products = $productManager->getProduct();
foreach ($products as $product) {
    echo $product->getName() . " giá " . $product->getPrice() . "<br>";
}

