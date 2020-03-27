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
        'controller' => 'LoginController',
        'action' => 'indexList'
    ]
];
