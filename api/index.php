<?php

session_start();

require 'Slim/Slim.php';
require 'dao/dbconnect.php';
require 'dto/ResponceObject.php';
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



?>