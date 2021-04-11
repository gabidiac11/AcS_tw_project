<?php

class Maps extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("Map", []);
    }

    public function find()
    {
        $this->loadView("Map", []);
    }

    public function pin()
    {
        $this->loadView("MapPin", []);
    }

    public function printcsv()
    {
        
    }
}
