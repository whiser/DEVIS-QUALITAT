<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

if(!isset($user_id)){
   header('location:index.php');
}

?>