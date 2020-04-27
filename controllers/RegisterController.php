<?php


namespace controllers;

use models\User;
session_start();

class RegisterController
{
    public function index()
    {
        return view("register.php");
    }

    public function postRegister()
    {
        $firstName = $_POST["firstName"];
        $lastName = $_POST['lastName'];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $userModel = new User();
        $where = "`email` = '$email'";
        $availableUser = $userModel->select([], $where);
        $errors = '';

        if (!$email) {
            $_SESSION['emailError'] = '* Введите емаил';
            $errors = 'error';
        } else unset($_SESSION['emailError']);
        if (!$firstName) {
            $_SESSION['firstnameError'] = '* Введите Имя';
            $errors = 'error';
        } else unset($_SESSION['firstnameError']);
        if (!$lastName) {
            $_SESSION['lastnameError'] = '* Введите Фамилию';
            $errors = 'error';
        } else unset($_SESSION['lastnameError']);
        if (!$password) {
            $_SESSION['passwordError'] = '* Введите пароль';
            $errors = 'error';
        } else unset($_SESSION['passwordError']);
        if (!$gender) {
            $_SESSION['genderError'] = '* Выберите пол';
            $errors = 'error';
        } else unset($_SESSION['genderError']);

        if ($errors == 'error') {
            header('Location: /register');
            unset($_SESSION['userNotAcces']);
            return;
        }

        if ($availableUser) {
            $_SESSION['userNotAcces'] = '* Tакой пользователь уже есть ';
            header('Location: /register');
            return;
        }
        if (true) {
            $userModel->create($email, $password, $lastName, $firstName);
            $_SESSION['password'] = $_POST["password"];
            $_SESSION['email'] = $_POST["email"];
            header('Location: /post-login');
            return;
        }
//            $email = 'updateNew1@gmail.com';
//            $password = 'aupdatepassword';
//            $columns = ['email','password','id'];
//           $id = 25;
////           $where = 'email = ' ."'". $email ."'";
////            $where = implode($where,',');
////            $key = array_keys($where);
////            $key = implode($key,',');
////            $where =  $key . $values;
////            if (isset($email)){
////                $where = 'email =' . $email;
////                return $where;
////            }if (isset($id)){
////                $where = 'id =' . $id;
////                return $where;
////            }if (isset($email,$id)){
////                return $where = 'email =' . $email . 'id =' . $id;
////            }
//
//            $userModel = new User();
////            $userModel->create($email, $password);
////            $userModel->delete( $id);
////            $userModel->select( $columns, $where);
//            $userModel->update($email, $password, $id);
////            $userModel->getId($email);


    }
}