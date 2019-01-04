<?php
namespace models;
use core\database;

class Login_model{
    function __construct($conn){
        $this->conn = $conn;
    }
    function check_user_and_pass(){
        $select_user_pass_query = $this->conn->prepare("SELECT username, password FROM users WHERE username = :username, password = :password");

        if($select_user_pass_query->execute(array(':username'=>$_GET["username"], ':password'=>$_GET["password"]))){
            $details = $select_user_pass_query->fetch(PDO::FETCH_NUM);
            if(!empty($details)){
                return true;
            }else{
                Login_view::show_message("Wrong user or password");
            }
        }else{
            Login_view::show_message("Error occured");
        }
    }
}


?>