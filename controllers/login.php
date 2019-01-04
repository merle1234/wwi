<?php
use core\database;
include("views/login.php");

class UserController {
    function UserController(){
        //contructor
    }

    function create($username, $password)
    {
        //create user in db
    }

    function login($username, $password)
    {
        if($his->authenticate($username, $password)) {
            session_start();
            //instantiate user model object
            $user = new UserModel($username);
            //set user object to session
            $_SESSION['user'] = $user;
            //we tell system that we authenticated
            return true;
        }
        else {
            return false;
        }
    }

    static function authenticate ($username, $password) {
        $authentic = false;
        //check against db
        if ($username == 'admin' && $password == 'admin') $authentic = true;
        return $authentic;
    }
    function logout ()
    {
        //logout procedure
        session_start();
        session_destroy();
    }

}

?>