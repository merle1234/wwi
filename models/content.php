<?php
namespace models;
use core\database;
class content extends products
{

    public function getData()
    {

        $conn = new database();


        $query = "SELECT stockitemID, stockitemname, Photo FROM stockitems ORDER BY stockitemname ASC";
        $queryresult = $conn->query($query);

        return $queryresult;
    }

}