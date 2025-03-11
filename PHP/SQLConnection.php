<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="/style/Menu">
    </head>
    <body>
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
            if(mysqli_num_rows  ($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    include("menuComponent.php");
                //     echo "<br>id: ". $row["ID"] ."<br>Name: ". $row["Name"]."<br>Price: ". $row["Price"] ."<br>Ingredients: ". $row["Ingredients"]." <br>Quantity: ". $row["Quantity"] ."<br>ImageURL: ". $row["ImageURL"]."<br>Creation Date: ". $row["CreationDate"];
                }
            }
            else{
                echo "0 results";
            }
            
            mysqli_close($conn);
        ?>
    </body>
</html>