<?php

include("../controller/ControllerProduct.php");
if (isset($_GET['id'])) {
    $_SESSION['id'] = $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage Produit</title>
</head>

<body>
    <p>
    <h1>Enregistrement des produits</h1>
    </p>
    <form action="../controller/ControllerProduct.php" method="POST">
        <p>Produit : <input type="text" name="produit" value="<?php if (isset($_GET['produit'])) {
                                                                    echo $_GET['produit'];
                                                                } ?>"></p>
        <p>Prix : <input type="text" name="prix" value="<?php if (isset($_GET['prix'])) {
                                                            echo $_GET['prix'];
                                                        } ?>"></p>
        <p>Quantité : <input type="text" name="nombre" value="<?php if (isset($_GET['nombre'])) {
                                                                    echo $_GET['nombre'];
                                                                } ?>"></p>
        <input type="submit" value="Create" name="create">
        <input type="submit" value="Read" name="read">
        <input type="submit" value="Update" name="update">
        <input type="submit" value="Delete" name="delete">
        <br>
        <br>
    </form>

    <?php

    $products = $product->getAllProducts();

    while ($product = $products->fetch()) {
        echo "<a href=\"view_product.php?id=" . $product['id'] . "&produit=" . $product['produit'] .
            "&prix=" . $product['prix'] . "&nombre=" . $product['nombre'] . "\" >Select line</a> id : " . $product['id'] .
            "- Produit : " . $product['produit'] . " - Prix : " . $product['prix'] . "<br>" . " - Quantité : " . $product['nombre'] . "<br>";
    }
    ?>

</body>

</html>