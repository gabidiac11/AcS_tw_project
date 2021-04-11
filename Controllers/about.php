<?php

class about extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("About", []);
    }
}
