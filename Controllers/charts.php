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
}
