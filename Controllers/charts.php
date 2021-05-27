<?php

class charts extends Controller
{
    private $chartsModel;
    function __construct()
    {
        parent::__construct();
        $this->chartsModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->chartsModel->verifyStatus() === 0) {
            $this->loadView("Charts", []);
        }else{
            $this->loadView("Maintenance", []);
        }
    }

    public function chart1()
    {
        if ($this->chartsModel->verifyStatus() === 0) {
            $this->loadView("Chart1", []);
        }else{

        }
    }

    public function chart2()
    {
        if ($this->chartsModel->verifyStatus() === 0) {
            $this->loadView("Chart2", []);
        }else{

        }
    }

    public function chart3()
    {
        if ($this->chartsModel->verifyStatus() === 0) {
            $this->loadView("Chart3", []);
        }else{

        }
    }
}
