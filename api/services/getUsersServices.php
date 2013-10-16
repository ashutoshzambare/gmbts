<?php

class getUserFunction{
    
    function getUsers() {
   // $sql = "SELECT * FROM users";
    try {
       /* $db = getConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetchAll();
        fb($user);
        $db = null;*/
        $user = R::find('users');
        echo ($user);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
    
    
}
?>
