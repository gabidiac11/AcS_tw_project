<?php

class NotFound extends Controller
{
    private $notFoundModel;
    function __construct()
    {
        parent::__construct();
        $this->notFoundModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->notFoundModel->verifyStatus() === 0) {
            $this->loadView("NotFound", []);
        }else{
            $this->loadView("Maintenance", []);
        }
    }
}
