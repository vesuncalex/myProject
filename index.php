<?php

ini_set("displey_errors", 1);
error_reporting(E_ALL);

define("ROOT", dirname(__FILE__));
require_once(ROOT . "/components/Router.php");
require_once(ROOT . "/controllers/LoginController.php");
require_once(ROOT . "/helper/helper.php");
require_once (ROOT . "/controllers/RegisterController.php");
require_once (ROOT . "/controllers/HomeController.php");
require_once (ROOT . "/controllers/RegistrationController.php");


$router = new Router();
$router->run();
