<?php

class maps extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Map", ['name' => 'buna']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }

    public function find()
    {
        $data = $this->db->select("SELECT * from test");

        $this->loadView("Map", ['name' => 'buna', 'data' => $data]);
    }

    public function pin()
    {
        $data = $this->db->select("SELECT * from test");

        $this->loadView("MapPin", ['name' => 'buna', 'data' => $data]);
    }

    public function printcsv()
    {
        
    }
}
