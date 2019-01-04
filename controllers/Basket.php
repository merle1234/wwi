<?php

use core\database;


class Basket
{
    public function winkelmand()
    {
        if (isset($_SESSION['winkelmand'])) {
            $winkelmand = $_SESSION['winkelmand'];
        } else {
            $winkelmand = array();
        }
        
        require_once('views/winkelmand.phtml');       
    }

    

    public function winkelmand_legen() {
        $winkelmand = null;

        $_SESSION['winkelmand'] = $winkelmand;
    }
}

?>