<?php

class adminmanager extends Controller
{
    private $adminManager;

    function __construct()
    {
        parent::__construct();
        $this->adminManager = $this->loadModel("AccountsQuery");
    }

    public function index()
    {
        $this->loadView("AdminManager", []);
    }

    public function getAccounts()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->adminManager->getAllAccounts($this->postData));
        } else {
            $this->loadView("adminmanager", []);
        }
    }

    public function editAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->adminManager->editAccount($this->postData));
        } else {
            $this->loadView("adminmanager", []);
        }
    }

    public function removeAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->adminManager->removeAccount($this->postData));
        } else {
            $this->loadView("adminmanager", []);
        }
    }
    public function addAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->adminManager->addAccount($this->postData));
        } else {
            $this->loadView("adminmanager", []);
        }
    }
}
