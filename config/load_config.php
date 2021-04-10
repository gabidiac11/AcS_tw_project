<?php

define("DELOPMENT", "TRUE");

if(DELOPMENT === "TRUE") {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

/**
 * MVC - model from scratch
 * Research:
 * - https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19
 * - https://lancecourse.com/howto/how-to-start-your-own-php-mvc-framework-in-4-steps
 * - experience with Codeigniter (replicate its MVC functionalities from my own perspective)
 */

require_once __DIR__.'/constants.php';
require_once __DIR__.'/Database.php';
require_once __DIR__.'/App.php';
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/Model.php';

(function () {
    $state = Router::getRoutingFromUrl();

    $controller = $state['controller'];
    $action = $state['action'];
    $arguments = $state['arguments'];

    $controllerPath = __DIR__ . '/../Controllers/' . ucfirst($controller) . ".php";

    if (file_exists($controllerPath)) {
        $controllerObj = Router::getControllerInstance($controller);

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
})();