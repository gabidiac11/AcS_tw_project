<?php

class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->router->redirect('/');
    }

    public function home()
    {
        $data = $this->db->select("SELECT * from test");
        
        $this->loadView("Index", ['name' => 'salut', 'data' => $data]);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
}
