<?php

class Router
{

    private static $defaultState = [
        'controller' => 'index',
        'action' => 'home',
        'arguments' => []
    ];

    /**
     * 
     * @var Singleton
     */
    private static $instance;

    private function __construct()
    {
        $this->autoRedirect();
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return 
     */
    private static function getRoutingFromUrl()
    {
        /**
         * homepage - default
         */
        $state = Router::$defaultState;

        if (isset($_SERVER['PATH_INFO'])) {
            $splited = explode('/', ltrim($_SERVER['PATH_INFO'], '/'));

            if (count($splited) > 0) {
                $state['controller'] = strtolower($splited[0]);

                if (count($splited) > 1) {
                    $state['action'] = strtolower($splited[1]);
                } else {
                    $state['action'] = "";
                }

                array_splice($splited, 0, 2);

                $state['arguments'] = $splited;
            }
        }

        return $state;
    }

    private function autoRedirect()
    {
        $state = Router::getRoutingFromUrl();

        $controller = $state['controller'];
        $action = $state['action'];
        $arguments = $state['arguments'];

        $controllerPath = __DIR__ . '/../../Controllers/' . ucfirst($controller) . ".php";

        if (file_exists($controllerPath)) {
            $controllerObj = $this->getControllerInstance($controller);

            // If there is a method - Second parameter
            if ($action != '') {
                // then we call the method via the view
                // dynamic call of the view
                print $controllerObj->$action($arguments);
            } else {
                print $controllerObj->index($arguments);
            }
        } else {
            header('HTTP/1.1 404 Not Found');
            die('404 - Not found.');
        }
    }

    private function getControllerInstance($controller ) {
        require_once __DIR__ . '/../../Controllers/' . $controller . '.php';
        $controllerName = ucfirst($controller);
        return new $controllerName();
    }
}

$router = Router::getInstance();
