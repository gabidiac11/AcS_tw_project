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

require_once __DIR__.'/constants.php';
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/router/Router.php';