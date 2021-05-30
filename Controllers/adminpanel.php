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
    public function verifyUser(){
        $this->accountManager->verifyAccount("test","test");
    }
}
