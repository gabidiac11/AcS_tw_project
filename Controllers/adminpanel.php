<?php

class admin extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("adminpanel", []);
    }
}
