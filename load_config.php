<?php

define("DELOPMENT", "TRUE");

if(DELOPMENT === "TRUE") {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * MVC - model from scratch
 * Research:
 * - https://medium.com/@noufel.gouirhate/create-your-own-mvc-framework-in-php-af7bd1f0ca19
 * - https://lancecourse.com/howto/how-to-start-your-own-php-mvc-framework-in-4-steps
 * - experience with Codeigniter (replicate its MVC functionalities from my own perspective)
 */

require_once __DIR__.'/constants.php';
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/router/Router.php';