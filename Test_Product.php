<?php
include("model/Product.php");

$product = new Product();
$product->setidProduct("1");
$product->setnameProduct("Livre");
$product->setpriceProduct("10,50€");
$product->setquantityProduct("5");

echo "<pre>";
var_dump($product);
echo "</pre>";
