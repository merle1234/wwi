<?php

use core\database;


class contact
{

    public function contact()
    {
        $id = $_GET['ID'];
        $content = new \models\contact();
        $result = $content->get_contact($id);
        require_once('views/contact.phtml');       
    }

}
?>