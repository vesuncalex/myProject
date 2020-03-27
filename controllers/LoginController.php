<?php

namespace controllers;

class LoginController
{
    public function index()
    {
        return view("login.php");
    }
    public function indexList()
    {
      return view("logic-tasks.php");
    }

}

