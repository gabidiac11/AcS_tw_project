<?php

class Maintenance extends Controller
{
    private $maintenanceModel;

    function __construct()
    {
        parent::__construct();
        $this->maintenanceModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->maintenanceModel->verifyStatus() === 0) {
            $this->loadView("about", []);
        } else {
            $this->loadView("maintenance", []);
        }
    }
}
