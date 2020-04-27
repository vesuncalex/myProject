<?php

namespace controllers;
use models\User;
session_start();
class LoginController
{
    public function index()
    {
        return view("login.php");
    }

    public function postLogin()
    {

        if (!$_SESSION['email']){
            $password = $_POST["passwordUser"];
            $email = $_POST["loginUser"];
        }else{
            $password = $_SESSION['password'];
            $email = $_SESSION['email'];
        }

        $userModel = new User();
        $errors = [];
        if (!$email) {
            $errors['email'] = '* Write  email';
        }
        if (!$password) {
           $errors['password']  = '* Write password';
        }
        if (!$password || !$email) {
            $_SESSION['errors'] = $errors;
            header('Location: /login');
            return;
        }
        $where = "`email` = '$email' && `password` = '$password'";

        $columns[] = "`password`";
        $availableUser = $userModel->select($columns, $where);

        if ($availableUser['password'] == $password) {
            $columns[] = "`firstName`";
            $userName = $userModel->select($columns, $where);
            unset($_SESSION['userName']);
            $_SESSION['userName'] = $userName['firstName'];
            $_SESSION['authorized'] = 'true';
            return header('Location: /profile ');
        }else {
            $errors['incorrect'] = 'Incorrect email or password';
            $_SESSION['errors'] = $errors;
            return header('Location: /login');
        }
    }

}

