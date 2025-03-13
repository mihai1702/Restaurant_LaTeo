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
    include("leftside.php");
    ?>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lateodb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$sql="SELECT * FROM menu";
$result = mysqli_query($conn, $sql);
?>
    <div class="product-management main-side">
        <div class="h2-a-flex">
            <h2>Product Management</h2>
            <a href="product-form.php">Add new Product</a>
        </div>
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
            include("product-row.php");
            ?>
        <?php
            // echo "<br>id: ". $row["ID"] ."<br>Name: ". $row["Name"]."<br>Price: ". $row["Price"] ."<br>Ingredients: ". $row["Ingredients"]." <br>Quantity: ". $row["Quantity"] ."<br>ImageURL: ". $row["ImageURL"]."<br>Creation Date: ". $row["CreationDate"];
            }
        }
        else{
            echo "0 results";
        }
    ?>
            <tr>
            </tr>
        </table>

        <div id="edit-form-container"></div>
    </div>
</body>

</html>