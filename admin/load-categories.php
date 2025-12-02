<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require 'connection_db.php';
    $sql="SELECT * FROM menucategory";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $categories[] = $row;
    }
    echo json_encode($categories);
    $conn->close();
}
