<?php
require 'admin/connection_db.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql=$conn->prepare('SELECT * FROM users WHERE username=?'); //tratare sql injection : " OR 1=1;--
    //$sql=$conn->prepare('SELECT * FROM users WHERE username='.$username); // Asa nu!
    $sql->bind_param('s',$username);
    $sql->execute();
    $result= $sql->get_result();

    if($result->num_rows==1){
        $user=$result->fetch_assoc();
        if(password_verify($password,$user['password'])){
            session_start();
            $_SESSION['auth_id']=$user['user_id'];
            $_SESSION['username']=$user['username'];
            echo json_encode(['success' => true]);

        } else {
            echo json_encode(['success' => false, 'message' => 'incorrectPass']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'usernameNotRegistered']);
    }
    }
?>