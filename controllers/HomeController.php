<?php

namespace controllers;

class HomeController
{
    public function index()
    {
        header('Location:/midlleware');
        return;
    }
}