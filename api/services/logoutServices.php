<?php

class logoutFunction {
    
   function getLogout() {
       echo"In Logout";
    $_SESSION['UserID'] = '';
    $_SESSION['EmailAddress'] = '';
    $_SESSION['LoginID'] = '';
    $_SESSION['GoldMember'] = '';
    session_destroy();
    echo "main.php";
} 
    
    
}
?>
