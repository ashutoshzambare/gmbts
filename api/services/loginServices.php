<?php

class loginFunctions{
    
  public function getlogin($logindata) {
      echo"in login";
   /* $request = Slim::getInstance()->request();
    $login = json_decode($request->getBody());
    fb('$login->loginName' + $login->loginName);
    fb('$login->loginPassword' + $login->loginPassword);
    $loginCaptcha = $login->loginCaptcha;*/
      $user_id = $logindata->loginName;
      $password = $logindata->loginPassword;
      $loginCaptcha = $logindata->loginCaptcha;
    try {
        if ($loginCaptcha == $_SESSION["code"]) {
            fb("I am here");
            $user_id = $login->loginName;
            $password = $login->loginPassword;
            $user = R::findOne('users', 'UserID=:userId', array(':userId' => $user_id));
            $userPassword = $user->Password;
            fb($user);
            if ($user && ($password == $userPassword)) {             
                $_SESSION['UserID'] = $user->UserID;
                $_SESSION['LoginID'] = $user->LoginID;
                $_SESSION['Gender'] = $user->Gender;
                $_SESSION['GoldMember'] = $user->GoldMember;
                $_SESSION['EmailAddress'] = $user->EmailAddress;
                $_SESSION['LOGIN_STATUS'] = 'loggedIn';
                $resDto = new ResponseDto();
                $resDto->success = false;
                $resDto->errorcode = 1;
                $resDto->errorMessage = $resDto->INVALID_USER;
                echo"success";
                echo json_encode($resDto);
            } else {
                echo '{"error":{"text": "Wrong Username or Password"}}';
            }
            $db = null;
        } else {
            echo '{"error":{"text": "Wrong Captcha Entered"}}';
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
} 
    
 

function  isCurrentLoggedUser() {
    if (isset($_SESSION['UserID']) && $_SESSION['LOGIN_STATUS']) {
        echo 'success';
    } else {
        echo 'error';
    }
} 
    
    
}

?>
