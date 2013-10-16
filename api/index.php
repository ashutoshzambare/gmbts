<?php



session_start();

require 'Slim/Slim.php';
require 'dao/dbconnect.php';
require 'ResponceObject.php';
require 'services/*.php';
require_once('../FirePHPCore/fb.php');


//$login = $log->getLogin();
//$userLog = $log->isCurrentLoggedUser();

$logo = new logoutFunction();
$logout = $logo->getLogout(); 

$getusr = new getUserFunction();
$getUsers = $getusr->getUsers();

$clog = new loggedUserFunction();
$currUser = $clog->getCurrentLoggedinUser();

$mag = new Magazine();
$maga = $mag->getMagazine();

$app = new Slim();
//$app->get('/wines', 'getWines');
//$app->get('/wines/:id',	'getWine');
//$app->get('/wines/search/:query', 'findByName');
//$app->post('/wines', 'addWine');
//$app->put('/wines/:id', 'updateWine');
//$app->delete('/wines/:id',	'deleteWine');

$app->post('/login', 'getLogin');
$app->post('/logout', 'getLogout');
$app->get('/users', 'getUsers');
$app->POST('/user', 'getCurrentLoggedinUser');
$app->POST('/isUserLoggedIn', 'isCurrentLoggedUser');
$app->POST('/getMagazine', 'getMagazine');


$app->run();

 function getLogin() {
    $request = Slim::getInstance()->request();
    $login = json_decode($request->getBody());
    fb('$login->loginName' + $login->loginName);
    fb('$login->loginPassword' + $login->loginPassword);
   // $loginCaptcha = $login->loginCaptcha;
    $logs = new loginFunctions();
    $check = $logs->getlogin($login);  }
   /*try {
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
                echo "success";
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
}*/ 
  

function getLogout() {
    $_SESSION['UserID'] = '';
    $_SESSION['EmailAddress'] = '';
    $_SESSION['LoginID'] = '';
    $_SESSION['GoldMember'] = '';
    session_destroy();
    echo "main.php";
}

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

function getMagazine() {
    $sql = "SELECT 	ProfileID, 
	MaritalStatus, 
	Height, 
	Complexion, 
	Caste, 
	EducationIn, 
	Profession, 
	CityID, 
	AnnualIncome 
	 
	FROM 
	user_profile 
	LIMIT 0, 30";
    try {
        $users = R::getAll('select ProfileID,MaritalStatus, Height, Complexion, Caste, EducationIn, Profession, CityID, AnnualIncome from user_profile');
        if ($users) {
            echo json_encode($users);
        } else {
            echo "error";
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
        
        }

 
?>