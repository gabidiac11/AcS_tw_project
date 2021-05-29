<?php

/**
 * @license Apache 2.0
 */

/**
 * @OA\Info(
 *     description="",
 *     version="1.0.0",
 *     title="Swagger USA Accidents Smart Visualizer",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="apiteam@swagger.io"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */
/**
 * @OA\Tag(
 *     name="search",
 *     description="Search accidents",
 *     @OA\ExternalDocumentation(
 *         description="Find out more",
 *         url="/search"
 *     )
 * )
 * 
 * @OA\Tag(
 *     name="charts",
 *     description="Charts data by which the canvas it's drawned",
 * @OA\ExternalDocumentation(
 *         description="Find out more",
 *         url="/charts"
 *     )
 * )
 */



define("DELOPMENT", "TRUE");

if (DELOPMENT === "TRUE") {
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

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/App.php';
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/Model.php';

(function () {
    $state = Router::getRoutingFromUrl();

    $controller = $state['controller'];
    $action = $state['action'];
    $arguments = $state['arguments'];

    $controllerPath = __DIR__ . '/../Controllers/' . ucfirst($controller) . ".php";

    if (1 || file_exists($controllerPath)) {
        $controllerObj = Router::getControllerInstance($controller);

        // If there is a method - Second parameter
        if ($action != '' && method_exists($controllerObj, $action)) {
            // then we call the method via the view
            // dynamic call of the view
            print $controllerObj->$action($arguments);
        } else {
            print $controllerObj->index($arguments);
        }
    } else {
        // header('HTTP/1.1 404 Not Found');
        // die('404 - Not found.');
        $controllerPath = __DIR__ . '/../Controllers/NotFound.php';
        $controllerObj = Router::getControllerInstance($controller);
        print $controllerObj->index($arguments);
    }
})();
