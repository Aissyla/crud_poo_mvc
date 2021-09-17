<?php
session_start();
include('../model/Product.php');
$product = new Product();

if (isset($_POST['create'])) { //C
    if (isset($_POST['produit']) && isset($_POST['prix']) && isset($_POST['nombre'])) {
        $nameProduct = $_POST['nombre'];
        $priceProduct = $_POST['prix'];
        $quantityProduct = $_POST['nombre'];
        $product->setnameProduct($nameProduct);
        $product->setpriceProduct($priceProduct);
        $product->setquantityProduct($quantityProduct);
        $product->addProduct();
        header("Location:../view/view_product.php");
    }
} elseif (isset($_POST['read'])) { //R
    header("Location:../view/view_product.php");
} elseif (isset($_POST['delete'])) { //D
    if (isset($_SESSION['id'])) {
        $product->setidProduct($_SESSION['id']);
        $product->deleteProduct();
        header("Location:../view/view_product.php");
    }
} elseif (isset($_POST['update'])) { //U
    if (isset($_SESSION['id']) && isset($_POST['produit']) && isset($_POST['prix']) && isset($_POST['nombre'])) {
        $product->setidProduct($_SESSION['id']);
        $product->setnameProduct($_POST['produit']);
        $product->setpriceProduct($_POST['prix']);
        $product->setquantityProduct($_POST['nombre']);
        $product->updateProduct();
        header("Location:../view/view_product.php");
    } else {
        header("Location:../view/view_product.php");
    }
}
