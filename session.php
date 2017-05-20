<?php
include 'config.php';
session_start();
   
   $user_check = $_SESSION['username'];
   $user_pass = $_SESSION['pass'];
   
   $ses_sql = "SELECT name from user where username = '$user_check'";
   
  $res = $conn->query($ses_sql);
  $rw = $res->fetch_assoc();
   
   $login_session = $rw['name'];
   
  // if(!isset ($login_session ) ){
    //  header("location:index.php");
  //}
?>