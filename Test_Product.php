<?php
include("model/Product.php");

$Product = new Product();
$Product->setidProduct("1");
$Product->setnameProduct("Livre");
$Product->setpriceProduct("10,50€");
$Product->setquantityProduct("5");
echo "<pre>";
var_dump($Product);
echo "</pre>";
