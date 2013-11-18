<?php

session_start();

require 'Slim/Slim.php';
require 'dao/dbconnect.php';
require 'ResponceObject.php';
//require 'services/*.php';
require_once('../FirePHPCore/fb.php');


$app = new Slim();
$app->get('/test', 'test');
$app->post('/login', 'getLogin');
$app->post('/logout', 'getLogout');
$app->POST('/user', 'getCurrentLoggedinUser');
$app->POST('/isUserLoggedIn', 'isCurrentLoggedUser');
$app->POST('/signup', 'signup');



$app->run();

function test() {
    echo 'Hey I am working';
}

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
        $json = json_encode( (array)$resDto );
        $json = str_replace ("\u0000ResponseDto\u0000", "",  $json);
        fb('$response'.$json);
        echo $json;
}

function getLogin() {
    $request = Slim::getInstance()->request();
    $login = json_decode($request->getBody());
    try {
        $email = $login->loginName;
        $password = $login->loginPassword;
        fb('I am in login');
        fb('$login->loginName'.$email);
        fb('$login->loginPassword'.$password);
        $user = R::findOne('users', 'email_id=:emailId', array(':emailId' => $email));
        $hash = md5($password);
        $resDto = new ResponseDto();
        if ($user && ($user->password == $hash) && $user->isActive == "Y") {
            $_SESSION['UserID'] = $user->emailId;
            $_SESSION['LoginID'] = $user->LoginID;
            $_SESSION['Gender'] = $user->Gender;
            $_SESSION['GoldMember'] = $user->GoldMember;
            $_SESSION['EmailAddress'] = $user->EmailAddress;
            $_SESSION['LOGIN_STATUS'] = 'loggedIn';
            $resDto->success = TRUE;
            $resDto->errorcode = 0;
            $resDto->target="projects";
            fb('$response'.$json);
        } else {
            $resDto->success = FALSE;
            $resDto->errorcode = 1;
        }
        $db = null;
    } catch (PDOException $e) {
        $resDto->success = FALSE;
        $resDto->errorcode = 1;
    }
    $json = json_encode( (array)$resDto );
    $json = str_replace ("\u0000ResponseDto\u0000", "",  $json);
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

?>