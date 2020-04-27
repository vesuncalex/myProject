<?php

namespace controllers;
use models\User;

class ProfileController
{
    public function profile()
    {   if (!$_SESSION['authorized']){
        header('Location:/login');
    }
        return view("profile.php");
    }
    public function logOut(){
        unset($_SESSION['authorized']);
        header('Location:/login');
        return;
    }
}