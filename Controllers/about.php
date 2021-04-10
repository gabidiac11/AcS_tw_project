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

        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("About", ['name' => 'salut']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
}
