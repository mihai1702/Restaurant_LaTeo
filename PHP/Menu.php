<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../style/Menu.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
</head>
        <?php
        include("../header.html");
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
            if(mysqli_num_rows  ($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    include("menu-component.php");
                //     echo "<br>id: ". $row["ID"] ."<br>Name: ". $row["Name"]."<br>Price: ". $row["Price"] ."<br>Ingredients: ". $row["Ingredients"]." <br>Quantity: ". $row["Quantity"] ."<br>ImageURL: ". $row["ImageURL"]."<br>Creation Date: ". $row["CreationDate"];
                }
            }
            else{
                echo "0 results";
            }
            
            mysqli_close($conn);
            include ("../footer.html");
        ?>
    
    </body>
</html>