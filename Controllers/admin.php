<?php

class admin extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("admin", []);
    }

    public function send() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $this->loadView('admin', $this->loadModel('AdminQuery')->verifyAccount($_POST));
        } else {
            $this->loadView('NotFound');
        }
    }
}
