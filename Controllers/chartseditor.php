<?php

class chartseditor extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("ChartsEditor", []);
    }
}
