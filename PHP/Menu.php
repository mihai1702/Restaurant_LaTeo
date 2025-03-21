<?php
    require "../admin/connection_db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../style/Menu.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
        include "../header.html";
        ?>
    <div>
        <h2>Choose category</h2>
        <select class="categoryFilter" name="" id="">
            <option class="categoryOption" value="all">Toate categoriile</option>
            <?php
                $result=$conn->query("SELECT * FROM menucategory");
                if(mysqli_num_rows  ($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <option class="categoryOption" id="Category" value="<?php echo $row['Cat_ID'] ?>"><?php echo $row['Cat_Name'] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div id="products-list" class="product-list">
    </div>

</html>
<?php
            include "../footer.html";
        ?>
<script src="../script.js"></script>
</body>

</html>