<?php
require_once('model/login.php');
session_start();
if(!isset($_SESSION['user'])){
    header("Location:loginindex.php");
}
else {
    $user = $_SESSION['user'];
}
?>
<<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>You are now logged in <?php print $user->get_username()?>
    <a href="loginindex.php?op=logout">Logout</a>
    </p>
</body>
</html>