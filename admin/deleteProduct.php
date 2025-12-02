<?php
    require "connection_db.php";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $id=$_POST['id'];
        $stmt=$conn->prepare("DELETE FROM menu WHERE ID=?");
        $stmt->bind_param("i", $id);
        if($stmt->execute()){
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => 'Produsul a fost șters.']);
        }else{
            echo json_encode(["success" => false, "message" => "Eroare la ștergere"]);
        }
        $stmt->close();
        }
        $conn->close();