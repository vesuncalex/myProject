<?php
use controllers\LoginController;
use controllers\RegisterController;
use controllers\HomeController;
use controllers\RegistrationController;

class Router
{

    private $routes;


    /**
     * Router constructor.
     */
    public function __construct()
    {

        $routesPath = ROOT . "/config/routes.php";
        $this->routes = include($routesPath);

    }


    /**
     *
     * @return string
     */
    private function getURI()
    {
        if ($_SERVER['REQUEST_URI'] == '/') {
            return '/';
        }

        return trim($_SERVER['REQUEST_URI'], '/');
    }


    public function run()
    {
        $uri = $this->getURI();
        $rout = $this->routes[$uri];

        if (!isset($rout) || !isset($rout['controller']) || !isset($rout['action'])) {
            echo "Not found error 404";
            die();
        }


        $className = 'controllers\\' . $rout['controller'];

        $actionName = $rout['action'];

        $controller = new $className();

        $controller->$actionName();


    }
}
