<?php
    require 'admin/connection_db.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $check= $conn->prepare("SELECT email FROM users WHERE email=?");
        $check->bind_param("s",$email);
        $check->execute();
        $result=$check->get_result();
        if($result->num_rows!= 0){
            echo json_encode(["success" => false, "message" => "Email deja folosit."]);
        }
        else{
            echo json_encode(["success"=> true,"message"=> "ii ok"]);
        }
    }
?>