<?php
$currentPage="";
?>
<section class="left-side">
        <p>Salut, <?php echo $_SESSION["username"] ?></p>
        <a href="products-administration.php" class="<?php echo ($currentPage=="productsAdministration") ? "active":"";?>">Products administration</a>
        <a href="categories-administration.php" class="<?php echo ($currentPage=="categoriesAdministration") ? "active":"";?>">Categories Administration</a>
        <a href="reservations-administration.php" class="<?php echo ($currentPage=="reservationsAdministration") ? "active":"";?>">Reservations Administration</a>
    <div class="logout"><a href="logout.php">LogOut</a></div>

</section>