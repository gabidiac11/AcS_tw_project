<?php

class contact extends Controller
{
    private $contactModel;
    function __construct()
    {
        parent::__construct();
        $this->contactModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->contactModel->verifyStatus() === 0) {
            $this->loadView("Contact", []);
        }else{
            $this->loadView("Maintenance", []);
        }
    }
}
