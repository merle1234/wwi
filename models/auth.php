<?php 

class auth{
    private $database;
    
/* constructor */

function __construct(){
        global $database;
        $this->$database = $database;
    }

    function validateLogin($user, $pass) {
        if ($stmt = $this->database->prepare("$SELECT * FROM users WHERE username = ? AND password = ?")) 
        {
            $stmt->bind_parent("ss", $user, md5($pass));
            $stmt->execute();
            $stmt->store_result();

            //check rows
            if($stmt->num_rows > 0) {
                //succes
                $stmt->close();
                return TRUE;

            }
            else
            {
                //failure
                $stmt->close();
                return FALSE;
            }
        }
        else{
            die("ERROR: could not prepare mysql statement");
        }
    }

    function checkLoginStatus(){
        if (isset($_SESSION['loggedin']))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function logout()
    {
        session_destroy();
        session_start();
    }
}

?>