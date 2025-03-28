<?php
session_start(); 
if(!isset($_SESSION["auth_id"])){
    header("Location: ../login.php");
}
