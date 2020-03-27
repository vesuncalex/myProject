<?php
namespace models;
use DataBase;

class User
{
    public function create($email, $password)
    {
        $sql = "INSERT INTO `$table` foreach ($attributes as $value)
{( $attributes) VALUES ($value)}";
        $db = new DataBase();
        $db->query($sql);
        $attributes = ['email' => $email, 'password' => $password];

    }
}
