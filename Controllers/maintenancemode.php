<?php

class maintenancemode extends Controller
{
    private $maintenanceManager;
    function __construct()
    {
        parent::__construct();
        $this->maintenanceManager = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        $this->loadView("MaintenanceMode", []);
    }
    public function getStatus(){
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            echo json_encode($this->maintenanceManager->getStatus());
        }else{
            $this->loadView("MaintenanceMode", []);
        }
    }
    public function updateMaintenance(){
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->maintenanceManager->updateStatus($this->postData));
        }else{
            $this->loadView("MaintenanceMode", []);
        }
    }
    public function updateText(){
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->maintenanceManager->updateDescription($this->postData));
        }else{
            $this->loadView("MaintenanceMode", []);
        }
    }
    public function getText(){
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            echo json_encode($this->maintenanceManager->getDescription());
        }else{
            $this->loadView("MaintenanceMode", []);
        }
    }

}
