<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require 'connection_db.php';
    $sql="SELECT * FROM reservations";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $reservations[] = $row;
    }
    echo json_encode($reservations);
    $conn->close();
}
