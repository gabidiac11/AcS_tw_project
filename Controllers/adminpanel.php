<?php

class adminpanel extends Controller
{
    private $accountManager;

    function __construct()
    {
        parent::__construct();
        $this->accountManager = $this->loadModel("AdminQuery");
    }

    public function index()
    {
        $this->loadView("adminpanel", []);
    }

    public function verify()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->accountManager->verifySession($this->postData));
        }else{
            $this->loadView("admin", []);
        }
    }
}
