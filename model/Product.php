<?php
include('Connexion.php');
class Product
{
    //attribut de la classe
    protected $idProduct;
    protected $nameProduct;
    protected $priceProduct;
    protected $quantityProduct;

    /*function __construct($idProduct,$nameProduct,$priceProduct,$quantityProduct){
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->quantityProduct = $quantityProduct;

    }   */
    function getidProduct()
    {
        return $this->idProduct;
    }
    function getnameProduct()
    {
        return $this->nameProduct;
    }
    function getpriceProduct()
    {
        return $this->priceProduct;
    }
    function getquantityProduct()
    {
        return $this->quantityProduct;
    }
    function setidProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }
    function setnameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }
    function setpriceProduct($priceProduct)
    {
        $this->priceProduct = $priceProduct;
    }
    function setquantityProduct($quantityProduct)
    {
        $this->quantityProduct = $quantityProduct;
    }

    function callConnexion()
    {
        $db = Connexion::getConnexion();
        return $db;
    }

    function addProduct()
    {
        $db = $this->callConnexion();
        $request = $db->prepare('INSERT INTO liste(id,produit,prix,nombre)
                                    VALUES (?,?,?,?)');
        $request->execute(array(
            $this->idProduct,
            $this->nameProduct,
            $this->priceProduct,
            $this->quantityProduct
        ));
    }

    function getAllProducts()
    { //R
        $db = $this->callConnexion();
        $products = $db->query('SELECT * FROM liste');
        return $products;
    }

    function updateProduct()
    { //U
        $db = $this->callConnexion();
        $request = $db->prepare("UPDATE liste SET produit=?,prix=?,nombre=? WHERE id=?");
        $request->execute(array(
            $this->idProduct,
            $this->nameProduct,
            $this->priceProduct,
            $this->quantityProduct
        ));
    }

    function deleteProduct()
    { //D 
        $db = $this->callConnexion();
        $request = $db->prepare("DELETE FROM liste WHERE id=?");
        $request->execute(array($this->idProduct));
    }
}
