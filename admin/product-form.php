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
        $product->name = mysqli_real_escape_string($conn,$_POST['Name']);
        $product->price = mysqli_real_escape_string($conn, $_POST['Price']);
        $product->ingredients =mysqli_real_escape_string($conn, $_POST['Ingredients']);
        $product->quantity = mysqli_real_escape_string($conn, $_POST['Quantity']);
        $product->imageURL = mysqli_real_escape_string($conn, $_FILES['imageURL']['name']);
        $product->creationDate = mysqli_real_escape_string($conn, $_POST['CreationDate']);
        
        $directory="../images/menu-images/";
            if (isset($_FILES["imageURL"])){
                $file=$_FILES["imageURL"];
                $filename=basename($file["name"]);
                $target_file=$directory.$filename;
                $tmp_name=$_FILES['imageURL']['tmp_name'];
                if(move_uploaded_file($tmp_name, $target_file)){
                    die("Fisierul a fost incarcat cu succes");
                }
                else{
                    die("eroare la adaugarea fisierului ");
                }
            }

        if(isset($_POST['ID']) && $_POST['ID']!='')
        {
            $product->editProduct($conn, $_POST['ID']);
        }
        else
        $product->addProduct($conn);
    }
    if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['product_id'])){
        $prod_array=$product->get_product($conn, $_GET['product_id']);
    }
    include("leftside.php");
    ?>
    <div class="main-side">
    <h1><?php echo isset($_GET["product_id"]) ? 'Edit Product': 'Add Product'?></h1>
    <form id="edit-product-form" method="POST" enctype="multipart/form-data">
        <input type="text" name="ID" value="<?php echo isset($_GET["product_id"]) ? $prod_array['ID']: ""?>" hidden>
        <div>
            <label for="Name">Name: </label>
            <div class="input-and-span">
                <input id="name" type="text" name="Name" value="<?php echo isset($_GET["product_id"]) ? $prod_array['Name']: ''?>" required>
                <span id="nameError" class="error-message"></span>
            </div>
        </div>
        <div>
            <label for="Price">Price: </label>
            <div class="input-and-span">
                <input id="price" type="text" name="Price" value="<?php echo isset($_GET["product_id"]) ? $prod_array['Price']: ''?>" required>
                <span id="priceError" class="error-message"></span>
            </div>
            
        </div>
        <div>
            <label for="Ingredients">Ingredients: </label>
            <div class="input-and-span">
                <textarea id="ingredients" class="ingredients-input" type="text" name="Ingredients" value="<?php echo isset($_GET["product_id"]) ? $prod_array['Ingredients']: ''?>" required></textarea>
                <span id="ingredientsError" class="error-message"></span>
            </div>
            
        </div>
        <div>
            <label for="Quantity">Quantity: </label>
            <div class="input-and-span">
                <input id="quantity" type="text" name="Quantity" value="<?php echo isset($_GET["product_id"]) ? $prod_array['Quantity']: ''?>" required>
                <span id="quantityError" class="error-message"></span>
            </div>
        </div>
        <div>
            <label for="ImageURL">Image Path: </label>
            <div class="input-and-span">
                <input id="image" type="file" name="imageURL" value="<?php echo isset($_GET["product_id"]) ? $prod_array['ImageURL']: ''?>" accept="image/*">
                <span id="imageError" class="error-message"></span>
            </div>
        </div>
        <div>
            <label for="CreationDate">Creation Date: </label>
            <div class="input-and-span">
                <input id="creationDate" type="date" name="CreationDate" value="<?php echo isset($_GET["product_id"]) ? $prod_array['CreationDate']: ''?>" required>
                <span id="creationDateError" class="error-message"></span>
            </div>
            
        </div>
        <button type="submit">Save</button>
    </form>
    </div>
<script src="../admin/js/admin-script.js"></script>
</body>

</html>