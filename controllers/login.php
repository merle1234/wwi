<?php
use core\database;
include("views/login.php");

class Login_controller{
    function validate($conn){
        if( isset($_GET["username"]) && isset($_GET["password"]) ){
            if( !empty($_GET["username"]) and !empty($_GET["password"]) ){
                $Login_model = new Login_model($conn);
                if($Login_model->check_user_and_pass()){
                    session_start();
                    $_SESSION["username"] = "logged_in";
                    Login_view::show_message("logged in");
                }
            }else{
                Login_view::show_message("empty");
            }
        }
    }
}


?>