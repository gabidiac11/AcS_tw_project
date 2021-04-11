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

        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Charts", ['name' => 'salut', 'data' => $data]);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
    public function chart1()
    {
        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Chart1", ['name' => 'buna']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
    public function chart2()
    {
        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Chart2", ['name' => 'buna']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
    public function chart3()
    {
        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Chart3", ['name' => 'buna']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
}
