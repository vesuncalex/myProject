<?php

namespace controllers;

use mysqli;

class DataBase
{
    private $conn;


    public function __construct()
    {
        die();
//        $conn = new mysqli($servername, $username, $password, $dbname);
    }

//    public function createTable_db ($tableName){
//        $conn = new mysqli($servername, $username, $password, $dbname);
//        $sql = "SELECT * FROM users WHERE (email = '".$logPage."' && password = '".$passPage."')";
//        $userLog = $conn->query($sql);
//    }
}

