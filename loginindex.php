<?php

require_once("controller/login.php");
require_once("model/login.php");

@$op = $_REQUEST['op'];

$user_controller = new UserController();
switch($op){
    case 'login';
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if($user_controller->login($username, $password)) {
        header("Location:afterlogin.phtml");

    }
    else header("Location:login.php?err=1");


    break;

    case 'logout';
    $user_controller->logout();
    header("Location:login.phtml");
    break;

    default:
        header("Location:login.phtml");
    break;
}

?>