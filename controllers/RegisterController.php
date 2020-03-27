<?php


namespace controllers;
use models\User;
class RegisterController
{
    public function index()
    {
        return view("register.php");
    }

    public function postRegister()
    {
        $userModel = new User();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userModel->create($email, $password);

    }

}

