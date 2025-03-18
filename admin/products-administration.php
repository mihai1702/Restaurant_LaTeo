<?php
require "connection_db.php";
require "product.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin menu</title>
    <link rel="stylesheet" href="../admin/css/main.css">
</head>

<body>
    <?php
    include "leftside.php";
    ?>
    <?php
$sql="SELECT * FROM menu";
$result = mysqli_query($conn, $sql);
?>
    <div class="product-management main-side">
        <div class="h2-a-flex">
            <h2>Product Management</h2>
            <a href="product-form.php">Add new Product</a>
        </div>
        <div class="products-table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Ingredients</th>
                    <th>Quantity</th>
                    <th>IMG Path</th>
                    <th>Creation Date</th>
                    <th></th>
                </tr>
                <?php
        if(mysqli_num_rows  ($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {    
            include "product-row.php";
            ?>
                <?php
            }
        }
        else{
            echo "0 results";
        }
        ?>
                <tr>
                </tr>
            </table>

        </div>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['method']) && $_GET['method']==='delete') {
                $id=$_GET['product_id'];
                $product = new Product();
                $product->deleteProduct($conn, $id);
        
            }
        ?>
        <div id="deletePopUp" class="pop-up">
            <div class="pop-up-content">
                <p>Are you sure you want to delete this product?</p>
                <button onclick="confirmDelete()" id="confirmButton">Confirm</button>
                <button onclick="declineDelete()" id="declineButton">Decline</button>
            </div>
        </div>

        <div id="edit-form-container"></div>
    </div>
    <script src="../admin/js/admin-script.js"></script>
</body>

</html>