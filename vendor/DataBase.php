<?php

class DataBase
{
    public $conn;
    protected $db;

    public function __construct($username = 'user', $password = 'secret', $host = 'localhost', $dbname = 'site')
    {
        $this->conn = true;
        try {
            $this->db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e - getMessage());
        }
    }

    public function query($sql)
    {

        $this->db->query($sql);

    }

    public function insert($table,$attributes)
    {
        
    }

}

