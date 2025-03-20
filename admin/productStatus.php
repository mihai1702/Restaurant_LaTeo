<?php
    require "connection_db.php";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $status=$_POST['value'];
        $id=$_POST['id'];
        $stmt=$conn->prepare("UPDATE menu set active=? WHERE ID=?");
        $stmt->bind_param("ii",$status, $id);
        if($stmt->execute()){
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => 'Statusul a fost schimbat']);
        }
        else{
            echo json_encode(["success" => false, "message" => "Eroare la schimbare status"]);
        }

    }