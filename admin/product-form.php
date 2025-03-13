<?php
require ("connection_db.php");
require("product.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/main.css">
</head>

<body>
    <?php
    $product = new Product();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product->name = $_POST['Name'];
        $product->price = $_POST['Price'];
        $product->ingredients = $_POST['Ingredients'];
        $product->quantity = $_POST['Quantity'];
        $product->imageURL = $_POST['ImageURL'];
        $product->creationDate = $_POST['CreationDate'];
        $product->addProduct($conn);
    }

    include("leftside.php");
    ?>
    <h1>Add Product</h1>

    <!-- Modifică formularul pentru a folosi metoda POST -->
    <form id="edit-product-form" method="POST">
        <input type="integer" name="ID" hidden>
        <label for="Name">Name: </label>
        <input type="text" name="Name" value="">
        <label for="Price">Price: </label>
        <input type="text" name="Price" value="">
        <label for="Ingredients">Ingredients</label>
        <input type="text" name="Ingredients" value="">
        <label for="Quantity">Quantity</label>
        <input type="text" name="Quantity" value="">
        <label for="ImageURL">Image Path</label>
        <input type="text" name="ImageURL" value="">
        <label for="CreationDate">Creation Date</label>
        <input type="text" name="CreationDate" value="">
        <button type="submit">Save</button>
    </form>

</body>

</html>