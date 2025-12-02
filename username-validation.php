<?php
    require 'admin/connection_db.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST['username'];
        $check= $conn->prepare("SELECT username FROM users WHERE username=?");
        $check->bind_param("s",$username);
        $check->execute();
        $result=$check->get_result();
        if($result->num_rows!= 0){
            echo json_encode(["success" => false, "message" => "Username deja folosit."]);
        }
        else{
            echo json_encode(["success"=> true,"message"=> "ii ok"]);
        }
    }
?>