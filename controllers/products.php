<?php

use core\database;


class Products
{
    public function products()
    {
        $page = 0;
        $search = null;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        if (isset($_POST['search'])) {
            $search = $_POST['search'];
        } else if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        $content = new \models\products();
        $result = $content->get_products($page, $search);
        $total = $content->get_total_pages($search);
        
        require_once('views/products.phtml');       
    }

    public function winkelmand() {
        $winkelmand = null;
        if (isset($_SESSION['winkelmand'])) {
            $winkelmand = $_SESSION['winkelmand'];
        } else {
            $winkelmand = array();
        }

        if (isset($_POST["product"]) && isset($_POST["amount"])) {
            array_push($winkelmand, array("product" => $_POST["product"], "amount" => $_POST["amount"]));
        }

        $_SESSION['winkelmand'] = $winkelmand;
    }

    public function winkelmand_legen() {
        $winkelmand = null;

        $_SESSION['winkelmand'] = $winkelmand;
    }
}

?>