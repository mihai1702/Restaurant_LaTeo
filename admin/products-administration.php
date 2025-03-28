<?php
require "connection_db.php";
require "product.php";
require "is-logged.php";
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
    $currentPage ="productsAdministration";
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
        <div>
            <table class="products-table">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Active</th>
                    <th>Price</th>
                    <th>Ingredients</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>IMG Path</th>
                    <th>Creation Date</th>
                    <th></th>
                </tr>
                <?php
            if(mysqli_num_rows  ($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {    
                include "product-row.php";
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

        <div id="deletePopUp" class="pop-up">
            <div class="pop-up-content">
                <p>Are you sure you want to delete this product?</p>
                <button id="confirmButton">Confirm</button>
                <button id="declineButton">Decline</button>
            </div>
        </div>

        <div id="edit-form-container"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../admin/js/admin-script.js"></script>
</body>

</html>