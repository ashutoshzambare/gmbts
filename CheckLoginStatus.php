<?php
 session_start();
 if(!isset($_SESSION['LOGIN_STATUS'])){
      header('location:login.php');
 }else{
      header('location:projects.php');
 }
?>
