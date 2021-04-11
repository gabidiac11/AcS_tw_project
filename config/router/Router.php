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
    public static function getRoutingFromUrl()
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

    public static function getControllerInstance($controller ) {
        $path = __DIR__ . '/../../Controllers/' . $controller . '.php';
        if(file_exists($path)) {
            require_once $path;
        } else {
            $controller = "NotFound";
            require_once __DIR__ . '/../../Controllers/NotFound.php';
        }
        
        $controllerName = ucfirst($controller);
        return new $controllerName();
    }

    public function redirect($path)
    {
        header("Location: $path");
    }
}
