<?php

class Map extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->router->redirect('/');
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
