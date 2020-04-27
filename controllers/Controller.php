<?php


namespace controllers;
use models\User;

class Controller
{
    public function midlleware (){
        if (!$_SESSION['authorized']){
            return view("home.php");
        }
        header('Location:/profile');
        return;
    }

}
