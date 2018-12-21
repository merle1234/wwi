<?php
namespace models;
use core\database;
class content
{

    public function getAll()
    {

        $connection = new database();

        $query = $connection->query("SELECT * FROM artikelen");
        return $query;
    }
}