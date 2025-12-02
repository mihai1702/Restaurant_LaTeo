<?php
require "../admin/connection_db.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $catID=$_POST['categoryID'];
    if($catID == "all"){
        $sql = "SELECT * FROM menu WHERE active=1";
    } else {
        $sql="SELECT * FROM menu WHERE Categ_ID=? AND active=1";
    }
    $stmt=$conn->prepare($sql);
    if($catID!="all"){
        $stmt->bind_param("i",$catID);
    }
    $stmt->execute();
    $result= $stmt->get_result();

    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    echo json_encode($products);
}