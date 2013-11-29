<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function signup() {
    $request = Slim::getInstance()->request();
    $SignUpUser = json_decode($request->getBody());
    $resDto = new ResponseDto();
    try {
        $user = R::dispense('users');
        $user->emailId = $SignUpUser->email;
        $user->companyName = $SignUpUser->companyName;
        $user->firstName = $SignUpUser->firstName;
        $user->lastName = $SignUpUser->lastName;
        $user->isActive = "N";
        $user->password = md5($SignUpUser->password);
        $id = R::store($user);
        $resDto->success = TRUE;
        $resDto->errorcode = 0;
    } catch (Exception $e) {
        $resDto->success = FALSE;
        $resDto->errorcode = 1;
    }
    $json = json_encode((array) $resDto);
    $json = str_replace("\u0000ResponseDto\u0000", "", $json);
    fb('$response' . $json);
    echo $json;
}

function getLogin() {
    $request = Slim::getInstance()->request();
    $login = json_decode($request->getBody());
    try {
        $email = $login->loginName;
        $password = $login->loginPassword;
        fb('I am in login');
        fb('$login->loginName' . $email);
        fb('$login->loginPassword' . $password);
        $user = R::findOne('users', 'email_id=:emailId', array(':emailId' => $email));
        $hash = md5($password);
        $resDto = new ResponseDto();
        if ($user && ($user->password == $hash)) {
            $_SESSION['UserID'] = $user->emailId;
            $_SESSION['LoginID'] = $user->LoginID;
            $_SESSION['Gender'] = $user->Gender;
            $_SESSION['GoldMember'] = $user->GoldMember;
            $_SESSION['EmailAddress'] = $user->EmailAddress;
            $_SESSION['LOGIN_STATUS'] = 'loggedIn';
            if ($user->isActive == "Y") {
                $resDto->success = TRUE;
                $resDto->errorcode = 0;
                $resDto->target = "projects";
            } else {
                $resDto->success = FALSE;
                $resDto->errorcode = 1;
                $resDto->errorMessage = "activate";
            }
        } else {
            $resDto->success = FALSE;
            $resDto->errorcode = 1;
        }
        $db = null;
    } catch (PDOException $e) {
        $resDto->success = FALSE;
        $resDto->errorcode = 1;
    }
    $json = json_encode((array) $resDto);
    $json = str_replace("\u0000ResponseDto\u0000", "", $json);
    fb('$response' . $json);
    echo $json;
}

function getLogout() {
    $_SESSION['UserID'] = '';
    $_SESSION['EmailAddress'] = '';
    $_SESSION['LoginID'] = '';
    $_SESSION['GoldMember'] = '';
    session_destroy();
    echo "main.php";
}

function getCurrentLoggedinUser() {
    $userId = $_SESSION['UserID'];
    try {
        $user = R::findOne('users', 'UserID=:userId', array(':userId' => $userId));
        if ($user) {
            echo $user;
        } else {
            echo "error";
        }
        $db = null;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function isCurrentLoggedUser() {
    if (isset($_SESSION['UserID']) && $_SESSION['LOGIN_STATUS']) {
        echo 'success';
    } else {
        echo 'error';
    }
}

function checkmail() {

    $request = Slim::getInstance()->request();
    $SignUpUser = json_decode($request->getBody());
    $resDto = new ResponseDto();
    try {

        $user = R::findOne('users', 'email_id=:emailId', array(':emailId' => $email));
        if ($user == true) {
            $userpass = passwordgen();
            $user->$userpass = md5($SignUpUser->$userpass);
            $id = R::store($userpass);
        }
    } catch (PDOException $e) {
        
    }
    $json = json_encode((array) $resDto);
    $json = str_replace("\u0000ResponseDto\u0000", "", $json);
    fb('$response' . $json);
    echo $json;
}

?>
