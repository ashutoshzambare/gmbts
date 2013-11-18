<?php
 include_once 'FirePHPCore/fb.php';
 session_start();
 fb('I am in login');
 if(!isset($_SESSION['LOGIN_STATUS'])){
      header('Location: login');
 }
 else{
      header('Location: projects');
 }
?>
