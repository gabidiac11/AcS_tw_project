<?php

class Model
{
    /**
     * @var Database|Singleton
     */
    public $db;
    
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function badResponse($response) {
        header($_SERVER["SERVER_PROTOCOL"]." 400 Bad Request");
        die(json_encode($response));
    }
}
