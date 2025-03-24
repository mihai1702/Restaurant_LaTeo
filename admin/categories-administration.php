<?php
require "connection_db.php";
require "product.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/main.css">
    <title>Category administration</title>
</head>

<body>
    <?php
    include "leftside.php";
    ?>
    <div class="category-content">
        <h1>Categories Administration</h1>
        <div>
            <table class="categories-table">
                <thead>
                    <tr>
                        <td>ID Categorie</td>
                        <td>Nume categorie</td>
                    </tr>
                </thead>
                <tbody></tbody>
                <tbody>

                </tbody>
            </table>
            <section>
                <h2>Add Category Form</h2>
                <form id="addCategoryForm">
                    <input type="text" id="category-name" required>
                    <button type="submit">Submit</button>
                </form>
                </section>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/admin-script.js"></script>
</body>

</html>