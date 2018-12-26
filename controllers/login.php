<?php

use core\database;


class login
{
    public function Login()
    {
        $content = new \models\login();
        require_once('views/login.phtml');       
    }
    
}

/*if($_POST){
    echo"succesvol ingeloggd";
}*/

include_once("model/login.php");
class Controller {
    public$model;
    public function_construct() {
        $this->model = new Model();
    }

    public function invoke(){
        $reslt = $this->model->getlogin();
        if($reslt == 'login') {
            include 'view/afterlogin.phtml';
        }
        else {
            include 'view/login.phtml'
        }
    }
    
}

?>


