<?php

return [
    'login' => [
        'controller' => 'LoginController',
        'action' => 'index'
    ],
    'register' => [
        'controller' => "RegisterController",
        'action' => "index"
    ],
    "/" => [
        'controller' => "HomeController",
        'action' => "index"
    ],
    "registration" => [
        'controller' => "RegisterController",
        'action' => "index"
    ],
    'work' => [
        'controller' => 'WorkController',
        'action' => 'index'
    ],
    'post-register' => [
        'controller' => 'RegisterController',
        'action' => 'postRegister',
    ],
    'logic-tasks' => [
        'controller' => 'LogicController',
        'action' => 'indexList'
    ],
    'post-login' => [
        'controller' => 'LoginController',
        'action' => 'postLogin',
],
    'profile' => [
        'controller' => 'ProfileController',
        'action' => 'profile'
    ],
    'log-out' => [
        'controller' => 'ProfileController',
        'action' => 'logOut'
    ],
    'midlleware' => [
        'controller' => 'Controller',
        'action' => 'midlleware'
    ]
];
