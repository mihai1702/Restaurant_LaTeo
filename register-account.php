<?php
require 'admin/connection_db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $hashed_password=password_hash($password, PASSWORD_DEFAULT);
    $sql=$conn->prepare('INSERT INTO users (username, email, password, role, active) VALUES(?,?,?, "admin",1)');
    $sql->bind_param('sss', $username, $email, $hashed_password);

    if($sql->execute()){
        //include 'admin/PHPMailer.php';
        echo json_encode(array('success'=> 'true','message'=> 'Inregistrat cu succes'));
    }
    else{
        echo json_encode(array('success'=> 'false','message'=> 'Eroare la inregistrare'));
    }
}