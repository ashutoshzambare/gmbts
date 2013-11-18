<?php
$user_check=$_SESSION['LOGIN_STATUS'];

if($user_check == ''){
    header("Location: login.php"); 
} else {
    header("Location: projects.php"); 
}

?>
