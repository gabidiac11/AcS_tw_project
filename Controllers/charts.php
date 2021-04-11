<?php

class charts extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = $this->db->select("SELECT * from test");

        $this->loadView("Charts", ['data' => $data]);
        $this->loadView("Layout/Bottom", []);
    }
    public function chart1()
    {
        $this->loadView("Chart1", []);
        $this->loadView("Layout/Bottom", []);
    }
    public function chart2()
    {
        $this->loadView("Chart2", []);
        $this->loadView("Layout/Bottom", []);
    }
    public function chart3()
    {
        $this->loadView("Chart3", []);
        $this->loadView("Layout/Bottom", []);
    }
}
