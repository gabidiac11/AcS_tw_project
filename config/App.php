<?php
require_once __DIR__ . '/router/Router.php';

class App
{
    public $router;
    public $db;

    public function __construct()
    {
        $this->router = Router::getInstance();
        $this->db = Database::getInstance();
    }
}
