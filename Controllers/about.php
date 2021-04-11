<?php

class about extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = $this->db->select("SELECT * from test");

        $this->loadView("About", []);
        $this->loadView("Layout/Bottom", []);
    }
}
