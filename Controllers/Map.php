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

        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Index", ['name' => 'buna', 'data' => $data]);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }

    public function printcsv()
    {
        $this->loadModel("DatabaseUtl")->phpCsvToDb();
    }
}
