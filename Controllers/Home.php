<?php

class Home extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        
        $this->loadView("Index", []);
        $this->loadView("Layout/Bottom", []);
    }
}