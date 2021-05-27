<?php

class about extends Controller
{
    private $aboutModel;
    function __construct()
    {
        parent::__construct();
        $this->aboutModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->aboutModel->verifyStatus() === 0) {
            $this->loadView("About", []);
        }else{
            $this->loadView("Maintenance", []);
        }
    }
}
