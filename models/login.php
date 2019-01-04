<?php
namespace models;
use core\database;


class login {

    private $data;

    function __constructor() {}
    /*functions */
    
    function load($url){
        include($url);
    }

    /*Get / Set DATA  */

    function setData($name, $value){
        $this->data[$name] = htmlentities($value, ENT_QUOTES);
    }

    function getData($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
            else 
            {
                return '';
            }
        }
    }

} 
?>